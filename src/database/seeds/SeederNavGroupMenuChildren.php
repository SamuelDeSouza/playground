<?php

use Illuminate\Database\Seeder;

class SeederNavGroupMenuChildren extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // check if table vpr_nav_group_menu_children is empty
        if(DB::table('vpr_nav_group_menu_children')->count() == 0){
            DB::table('vpr_nav_group_menu_children')->insert([
                ['id_menu_children' => 1, 'id_menu' => 1, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 2, 'id_menu' => 1, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 3, 'id_menu' => 1, 'name' => 'Menus', 'link' => 'navgroupmenu', 'default' => 0],
                ['id_menu_children' => 4, 'id_menu' => 2, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 5, 'id_menu' => 2, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 6, 'id_menu' => 2, 'name' => 'Thumb', 'link' => 'thumb', 'default' => 0],
                ['id_menu_children' => 7, 'id_menu' => 2, 'name' => 'Conf__Filhos', 'link' => 'navmenuchildren', 'default' => 0],
                ['id_menu_children' => 8, 'id_menu' => 2, 'name' => 'Conf__Busca', 'link' => 'navmenusearch', 'default' => 0],
                ['id_menu_children' => 9, 'id_menu' => 2, 'name' => 'Conf__Style', 'link' => 'navmenustyle', 'default' => 0],
                ['id_menu_children' => 10, 'id_menu' => 3, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 11, 'id_menu' => 3, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 12, 'id_menu' => 3, 'name' => 'Alerar_Senha', 'link' => 'usuariopassword', 'default' => 0],
                ['id_menu_children' => 13, 'id_menu' => 3, 'name' => 'Permissões', 'link' => 'permissoes', 'default' => 0],
                ['id_menu_children' => 14, 'id_menu' => 4, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 15, 'id_menu' => 4, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 16, 'id_menu' => 5, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 17, 'id_menu' => 5, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 18, 'id_menu' => 6, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 19, 'id_menu' => 6, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 20, 'id_menu' => 7, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 21, 'id_menu' => 7, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 22, 'id_menu' => 7, 'name' => 'Lista_Colunas', 'link' => 'navgroupmenustylecollumn', 'default' => 0],
                ['id_menu_children' => 23, 'id_menu' => 8, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 24, 'id_menu' => 8, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 25, 'id_menu' => 9, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 26, 'id_menu' => 9, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 27, 'id_menu' => 10, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 28, 'id_menu' => 10, 'name' => 'Uploads', 'link' => 'upload', 'default' => 0],
                ['id_menu_children' => 29, 'id_menu' => 11, 'name' => 'Geral', 'link' => '', 'default' => 1],
                ['id_menu_children' => 30, 'id_menu' => 11, 'name' => 'Upload', 'link' => 'upload', 'default' => 0],
            ]);
        }
    }
}