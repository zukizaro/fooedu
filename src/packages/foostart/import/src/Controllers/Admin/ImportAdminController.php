<?php namespace Foostart\Import\Controllers\Admin;

use Illuminate\Http\Request;
use Foostart\Import\Controllers\Admin\MyController;
use URL;
use Route,
    Redirect;
use Foostart\Import\Models\Imports;
/**
 * Validators
 */
use Foostart\Import\Validators\ImportAdminValidator;

class ImportAdminController extends MyController {

    public $data_view = array();
    private $obj_import = NULL;
    private $obj_import_categories = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_import = new Imports();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

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
    public function edit(Request $request) {

        $import = NULL;
        $import_id = (int) $request->get('id');


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
    public function post(Request $request) {

        $this->obj_validator = new ImportAdminValidator();

        $input = $request->all();


        $import_id = (int) $request->get('id');
        $import = NULL;

        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($import_id) && is_int($import_id)) {

                $import = $this->obj_import->find($import_id);
            }
        } else {
            if (!empty($import_id) && is_int($import_id)) {

                $import = $this->obj_import->find($import_id);

                if (!empty($import)) {

                    $input['import_id'] = $import_id;
                    $import = $this->obj_import->update_import($input);

                    //Message
                    $this->addFlashMessage('message', trans('import::import_admin.message_update_successfully'));
                    return Redirect::route("admin_import.edit", ["id" => $import->import_id]);
                } else {

                    //Message
                    $this->addFlashMessage('message', trans('import::import_admin.message_update_unsuccessfully'));
                }
            } else {

                $import = $this->obj_import->add_import($input);

                if (!empty($import)) {

                    //Message
                    $this->addFlashMessage('message', trans('import::import_admin.message_add_successfully'));
                    return Redirect::route("admin_import.edit", ["id" => $import->import_id]);
                } else {

                    //Message
                    $this->addFlashMessage('message', trans('import::import_admin.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'import' => $import,
            'request' => $request,
        ), $data);

        return view('import::import.admin.import_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $import = NULL;
        $import_id = $request->get('id');

        if (!empty($import_id)) {
            $import = $this->obj_import->find($import_id);

            if (!empty($import)) {
                //Message
                $this->addFlashMessage('message', trans('import::import_admin.message_delete_successfully'));

                $import->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'import' => $import,
        ));

        return Redirect::route("admin_import");
    }

}
