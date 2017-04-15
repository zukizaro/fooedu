<?php

use Illuminate\Database\Seeder;

class ImportsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //Create example data
        for ($i = 0; $i < 50; $i++) {
            DB::table('imports')->insert([
                'import_name' => str_random(10)
            ]);
        }
    }

}
