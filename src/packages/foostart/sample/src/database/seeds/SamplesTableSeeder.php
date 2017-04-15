<?php

use Illuminate\Database\Seeder;

class SamplesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //Create example data
        for ($i = 0; $i < 50; $i++) {
            DB::table('samples')->insert([
                'sample_name' => str_random(10)
            ]);
        }
    }

}
