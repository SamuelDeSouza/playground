<?php

use Illuminate\Database\Seeder;

class SeederNavGroupMenuStyle extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // check if table vpr_nav_group_menu_style is empty
        if(DB::table('vpr_nav_group_menu_style')->count() == 0){
            DB::table('vpr_nav_group_menu_style')->insert([
                ['id_menu_style' => 1, 'id_menu' => 1, 'id_style' => 1, 'default'=> 1],
                ['id_menu_style' => 2, 'id_menu' => 2, 'id_style' => 1, 'default'=> 1],
                ['id_menu_style' => 3, 'id_menu' => 3, 'id_style' => 1, 'default'=> 1],
                ['id_menu_style' => 4, 'id_menu' => 4, 'id_style' => 1, 'default'=> 1],
                ['id_menu_style' => 5, 'id_menu' => 5, 'id_style' => 1, 'default'=> 1],
                ['id_menu_style' => 6, 'id_menu' => 6, 'id_style' => 1, 'default'=> 1],
                ['id_menu_style' => 7, 'id_menu' => 7, 'id_style' => 1, 'default'=> 1],
                ['id_menu_style' => 8, 'id_menu' => 8, 'id_style' => 1, 'default'=> 1],
                ['id_menu_style' => 9, 'id_menu' => 9, 'id_style' => 5, 'default'=> 1],
                ['id_menu_style' => 10, 'id_menu' => 10, 'id_style' => 1, 'default'=> 1],
                ['id_menu_style' => 11, 'id_menu' => 11, 'id_style' => 1, 'default'=> 1],
            ]);
        }
    }
}