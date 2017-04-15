<?php

namespace Foostart\Import\Models;

use Illuminate\Database\Eloquent\Model;

class Imports extends Model
{

    protected $table = 'imports';
    public $timestamps = true;
    protected $fillable = [
        'import_name',
        'import_description',
        'import_created_at',
        'import_updated_at',
    ];
    protected $primaryKey = 'import_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_imports($params = array())
    {
        $eloquent = self::orderBy('import_id');

        //import_name
        if (!empty($params['import_name'])) {
            $eloquent->where('import_name', 'like', '%' . $params['import_name'] . '%');
        }

        $imports = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $imports;
    }


    /**
     *
     * @param type $input
     * @param type $import_id
     * @return type
     */
    public function update_import($input, $import_id = NULL)
    {

        if (empty($import_id)) {
            $import_id = $input['import_id'];
        }

        $import = self::find($import_id);

        if (!empty($import)) {

            $import->import_name = $input['import_name'];
            $import->import_description = $input['import_description']; 
            $import->import_updated_at = date('Y-m-d');

            $import->save();

            return $import;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_import($input)
    {

        $import = self::create([
            'import_name' => @$input['import_name'],
            'import_description' => @$input['import_description'],
            'import_created_at' => date('Y-m-d'),
            'import_updated_at' => date('Y-m-d'),
        ]);
        return $import;
    }
}
