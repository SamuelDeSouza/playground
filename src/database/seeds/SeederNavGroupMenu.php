<?php

use Illuminate\Database\Seeder;

class SeederNavGroupMenu extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    // check if table vpr_nav_group_menu is empty
    if(DB::table('vpr_nav_group_menu')->count() == 0){
      DB::table('vpr_nav_group_menu')->insert([
        ['id_nav_group_menu' => 1, 'id_group' => 1, 'name' => 'Grupos de Menus', 'link' => 'navgroup', 'visible' => 1],
        ['id_nav_group_menu' => 2, 'id_group' => 1, 'name' => 'Menus', 'link' => 'navgroupmenu', 'visible' => 0],
        ['id_nav_group_menu' => 3, 'id_group' => 1, 'name' => 'Usuarios', 'link' => 'usuarios', 'visible' => 1],
        ['id_nav_group_menu' => 4, 'id_group' => 1, 'name' => 'Aleração de Senha', 'link' => 'usuariopassword', 'visible' => 0],
        ['id_nav_group_menu' => 5, 'id_group' => 1, 'name' => 'Permissões', 'link' => 'permissoes', 'visible' => 0],
        ['id_nav_group_menu' => 6, 'id_group' => 1, 'name' => 'Conf. menu Filho', 'link' => 'navmenuchildren', 'visible' => 0],
        ['id_nav_group_menu' => 7, 'id_group' => 1, 'name' => 'Conf. Menu Style', 'link' => 'navmenustyle', 'visible' => 0],
        ['id_nav_group_menu' => 8, 'id_group' => 1, 'name' => 'Conf. Email Envio', 'link' => 'configurationmail', 'visible' => 1],
        ['id_nav_group_menu' => 9, 'id_group' => 1, 'name' => 'Conf. Menu Style Colunas', 'link' => 'navgroupmenustylecollumn', 'visible' => 0],
        ['id_nav_group_menu' => 10, 'id_group' => 1, 'name' => 'Thumb', 'link' => 'thumb', 'visible' => 0],
        ['id_nav_group_menu' => 11, 'id_group' => 1, 'name' => 'Configurações', 'link' => 'configuration', 'visible' => 1],
      ]);
    }
  }
}
