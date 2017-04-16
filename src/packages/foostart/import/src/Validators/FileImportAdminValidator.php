<?php
namespace Foostart\Import\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class FileImportAdminValidator extends AbstractValidator
{
    protected static $rules = array( 
        'import_file' => 'required|mimes:xlsx,xls'
    );

    protected static $messages = [];


    public function __construct()
    {
        Event::listen('validating', function($input)
        {
        });
        $this->messages();
    }

    public function validate($input) {
 
        $flag = parent::validate($input);

        $this->errors = $this->errors?$this->errors:new MessageBag();
 
        return $flag;
    }


    public function messages() {
        self::$messages = [
            'required' => ':attribute '.trans('import::import_admin.required')
        ];
    }
 
}
