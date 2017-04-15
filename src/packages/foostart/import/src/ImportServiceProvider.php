<?php namespace Foostart\Import;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;

use URL, Route;
use Illuminate\Http\Request;


class ImportServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
         $this->publishes([
            __DIR__.'/config/import_admin.php' => config_path('import_admin.php'),
        ],'config');

        $this->loadViewsFrom(__DIR__ . '/views', 'import');


        /**
         * Translations
         */
         $this->loadTranslationsFrom(__DIR__.'/lang', 'import');


        /**
         * Load view composer
         */
        $this->importViewComposer($request);

         $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations')
            ], 'migrations');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';

        /**
         * Load controllers
         */
        $this->app->make('Foostart\Import\Controllers\Admin\ImportAdminController');

         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'import');
    }

    /**
     *
     */
    public function importViewComposer(Request $request) {

        view()->composer('import::import*', function ($view) {
            global $request;
            $import_id = $request->get('id');
            $is_action = empty($import_id)?'page_add':'page_edit';

            $view->with('sidebar_items', [

                /**
                 * Imports
                 */
                //list
                trans('import::import_admin.page_list') => [
                    'url' => URL::route('admin_import'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('import::import_admin.'.$is_action) => [
                    'url' => URL::route('admin_import.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
 
            ]);
            //
        });
    }

}
