<?php

use Illuminate\Database\Seeder;

class SeederLoginClasses extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // check if table vpr_login_classes is empty
        if(DB::table('vpr_login_classes')->count() == 0){
            DB::table('vpr_login_classes')->insert([
                ['id_login_class' => 1, 'name' => 'Admin'],
                ['id_login_class' => 2, 'name' => 'Site'],
            ]);
        }
    }
}
