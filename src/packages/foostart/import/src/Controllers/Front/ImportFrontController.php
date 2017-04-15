<?php

namespace Foostart\Import\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Import\Models\Imports;

class ImportFrontController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_import = new Imports();
        $imports = $obj_import->get_imports();
        $this->data = array(
            'request' => $request,
            'imports' => $imports
        );

        return view('import::import.index', $this->data);
    }

}
