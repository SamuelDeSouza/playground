<?php

use Illuminate\Database\Seeder;

class SeederCountries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table vpr_countries is empty
        if(DB::table('vpr_countries')->count() == 0){
            DB::table('vpr_countries')->insert([
                [
                    'id_country' => 1,
                    'name' => 'Brasil',
                ]
            ]);
        }
    }
}
