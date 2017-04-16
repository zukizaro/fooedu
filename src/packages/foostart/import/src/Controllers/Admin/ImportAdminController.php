<?php namespace Foostart\Import\Controllers\Admin;

use Foostart\Import\Models\Imports;
use Foostart\Import\Validators\ImportAdminValidator;
use Foostart\Import\Validators\FileImportAdminValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Maatwebsite\Excel\Facades\Excel;
use Redirect;
use Route;
use function Sodium\crypto_sign_verify_detached;
use URL;

/**
 * Validators
 */
/*
 * Excel
 */

class ImportAdminController extends MyController
{

    public $data_view = array();
    private $obj_import = NULL;
    private $obj_import_categories = NULL;
    private $obj_validator = NULL;

    public function __construct()
    {
        $this->obj_import = new Imports();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request)
    {

        $params = $request->all();

        $list_import = $this->obj_import->get_imports($params);

        $this->data_view = array_merge($this->data_view, array(
            'imports' => $list_import,
            'request' => $request,
            'params' => $params
        ));
        return view('import::import.admin.import_list', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function edit(Request $request)
    {

        $import = NULL;
        $import_id = (int)$request->get('id');

        if (!empty($import_id) && (is_int($import_id))) {
            $import = $this->obj_import->find($import_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'import' => $import,
            'request' => $request,
        ));
        return view('import::import.admin.import_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request)
    {


        $this->obj_validator = new ImportAdminValidator();
        $this->obj_file_validator = new FileImportAdminValidator();

        $input = $request->all();


        $import = NULL;

        $data = array();

        if (!$this->obj_file_validator->validate($input)) {

            $data['errors'] = $this->obj_file_validator->getErrors();

        } else {
            $import_sheet = !empty($input['import_sheet']) ? $input['import_sheet'] : 0;
            $import_header = !empty($input['import_header']) ? $input['import_header'] : 1;

            $import_columns = $this->make_slug($this->stripUnicode($input['import_columns']));

            $path = 'media\\files\\';

            $name_file = $this->moveFile($request, $path); //move file to media to reader

            $excel = $this->reader_excel($path, $import_header, $import_sheet, $name_file)->toArray();

            $this->import_db(array_merge($input, [
                'excel' => $excel
            ]), $import_columns);

            
            $dir = public_path($path);
            unlink($dir . $name_file);      //delete file to 

            $this->addFlashMessage('message', trans('sample::sample_admin.message_add_successfully'));
        }

        $this->data_view = array_merge($this->data_view, array(
            'import' => $import,
            'request' => $request,
        ), $data);

        return redirect()->route('admin_import');
    }


    public function import_db($input = array(), $columns = [])
    {
        Imports::query()->truncate();

        foreach ($input['excel'] as $key => $item):
            if (isset($item[$columns[0]]) && isset($item[$columns[1]]) && isset($item[$columns[2]])) {
                $input['import_name'] = $item[$columns[0]];
                $input['import_overview'] = $item[$columns[1]];
                $input['import_description'] = $item[$columns[2]];

                if (!$this->obj_validator->validate($input)) {
                    continue;
                } else {
                    $add = $this->obj_import->add_import($input);
                }

            }
        endforeach;
    }

    public function reader_excel($path, $header = 1, $sheet = 0, $name)
    {
        Config::set('excel.import.startRow', $header);//set header attribute

        $excel = Excel::selectSheetsByIndex($sheet)->load('public/' . $path . $name, function ($reader) {
            $reader->get();
        }, 'UTF-8');

        return $excel;
    }

    public function make_slug($import_columns)
    {

        $arr_import_columns = explode(',', $import_columns);
        $arr_temp = [];
        foreach ($arr_import_columns as $item):
            $arr_temp[] = implode('_', explode(' ', trim($item)));
        endforeach;

        return $arr_temp;
    }

    public function moveFile(Request $request, $path)
    {
        $filename = $_FILES["import_file"]["name"]; //get file name and type file;
        $file_basename = substr($filename, 0, strripos($filename, '.')); //get file name
        $file_ext = substr($filename, strripos($filename, '.')); //get type file
        $dir = public_path($path);
        $new_file_name = md5($file_basename) . $file_ext;
        $request->file('import_file')->move($dir, $new_file_name);


        return $new_file_name;
    }

    function stripUnicode($str)
    {
        if (!$str) return false;
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd' => 'đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
        );
        foreach ($unicode as $nonUnicode => $uni) $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        return $str;
    }

}
