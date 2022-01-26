<?php

use Illuminate\Database\Seeder;

class SeederNavGroup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table vpr_nav_group is empty
        if(DB::table('vpr_nav_group')->count() == 0){
            DB::table('vpr_nav_group')->insert([
                ['id_nav_group' => 1, 'name' => 'Configurações', 'link' => 'NULL', 'submenu' => 1],
            ]);
        }
    }
}