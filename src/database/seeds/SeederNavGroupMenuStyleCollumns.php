<?php

use Illuminate\Database\Seeder;

class SeederNavGroupMenuStyleCollumns extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // check if table vpr_nav_group_menu_style_collumns is empty
        if(DB::table('vpr_nav_group_menu_style_collumns')->count() == 0){
            DB::table('vpr_nav_group_menu_style_collumns')->insert([
                ['id_menu_style_list' => 1, 'id_menu_style' => 1, 'name' => 'ID', 'collumn' => 'id_nav_group', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 2, 'id_menu_style' => 1, 'name' => 'Nome Do Grupo', 'collumn' => 'name', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 40],
                ['id_menu_style_list' => 3, 'id_menu_style' => 1, 'name' => 'Link', 'collumn' => 'link', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 30],
                ['id_menu_style_list' => 4, 'id_menu_style' => 1, 'name' => 'Criado em:', 'collumn' => 'created_at', 'default' => 0, 'order' => 'desc', 'function' => 0, 'legenth' => 0, 'size' => 20],
                ['id_menu_style_list' => 5, 'id_menu_style' => 2, 'name' => 'Id', 'collumn' => 'id_nav_group_menu', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 6, 'id_menu_style' => 2, 'name' => 'Nome Do Menu', 'collumn' => 'name', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 50],
                ['id_menu_style_list' => 7, 'id_menu_style' => 2, 'name' => 'Link', 'collumn' => 'link', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 40],
                ['id_menu_style_list' => 8, 'id_menu_style' => 3, 'name' => 'Id', 'collumn' => 'id_login_user', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 9, 'id_menu_style' => 3, 'name' => 'Nome do Usuário', 'collumn' => 'name', 'default' => 0, 'order' => 'null', 'function' => 0, 'legenth' => 250, 'size' => 40],
                ['id_menu_style_list' => 10, 'id_menu_style' => 3, 'name' => 'E-mail', 'collumn' => 'email', 'default' => 0, 'order' => 'null', 'function' => 0, 'legenth' => 250, 'size' => 50],
                ['id_menu_style_list' => 11, 'id_menu_style' => 4, 'name' => 'ID', 'collumn' => 'id_login_user', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 12, 'id_menu_style' => 5, 'name' => 'ID', 'collumn' => 'id_permission', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 13, 'id_menu_style' => 5, 'name' => 'Menu', 'collumn' => 'id_menu', 'default' => 0, 'order' => 'asc', 'function' => 1, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 14, 'id_menu_style' => 5, 'name' => 'Grupo', 'collumn' => 'id_grupo', 'default' => 0, 'order' => 'asc', 'function' => 1, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 15, 'id_menu_style' => 5, 'name' => 'Perm. Visualizar', 'collumn' => 'view', 'default' => 0, 'order' => 'asc', 'function' => 1, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 16, 'id_menu_style' => 5, 'name' => 'Perm. Editar', 'collumn' => 'edit', 'default' => 0, 'order' => 'asc', 'function' => 1, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 17, 'id_menu_style' => 5, 'name' => 'Perm. Adicionar', 'collumn' => 'add', 'default' => 0, 'order' => 'asc', 'function' => 1, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 18, 'id_menu_style' => 5, 'name' => 'Perm. Delete', 'collumn' => 'delete', 'default' => 0, 'order' => 'asc', 'function' => 1, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 19, 'id_menu_style' => 5, 'name' => 'Perm. Upar', 'collumn' => 'upload', 'default' => 0, 'order' => 'asc', 'function' => 1, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 20, 'id_menu_style' => 6, 'name' => 'ID', 'collumn' => 'id_menu_children', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 21, 'id_menu_style' => 6, 'name' => 'Nome', 'collumn' => 'name', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 40],
                ['id_menu_style_list' => 22, 'id_menu_style' => 7, 'name' => 'ID', 'collumn' => 'id_menu_style', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 23, 'id_menu_style' => 7, 'name' => 'Default', 'collumn' => 'default', 'default' => 0, 'order' => 'asc', 'function' => 1, 'legenth' => 0, 'size' => 30],
                ['id_menu_style_list' => 24, 'id_menu_style' => 7, 'name' => 'Stylo', 'collumn' => 'id_style', 'default' => 0, 'order' => 'asc', 'function' => 1, 'legenth' => 0, 'size' => 40],
                ['id_menu_style_list' => 25, 'id_menu_style' => 8, 'name' => 'ID', 'collumn' => 'id_configuration', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 26, 'id_menu_style' => 8, 'name' => 'SMTP', 'collumn' => 'smtp', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 40],
                ['id_menu_style_list' => 27, 'id_menu_style' => 8, 'name' => 'E-mail de Envio', 'collumn' => 'mail_send', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 40],
                ['id_menu_style_list' => 28, 'id_menu_style' => 8, 'name' => 'Porta SMTP', 'collumn' => 'smtp_port', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 29, 'id_menu_style' => 9, 'name' => 'ID', 'collumn' => 'id_menu_style_list', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 30, 'id_menu_style' => 9, 'name' => 'Nome', 'collumn' => 'name', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 40],
                ['id_menu_style_list' => 31, 'id_menu_style' => 9, 'name' => 'Coluna', 'collumn' => 'collumn', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 40],
                ['id_menu_style_list' => 32, 'id_menu_style' => 9, 'name' => 'Default', 'collumn' => 'default', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 33, 'id_menu_style' => 10, 'name' => 'ID', 'collumn' => 'id_thumb', 'default' => 1, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 10],
                ['id_menu_style_list' => 34, 'id_menu_style' => 10, 'name' => 'Largura', 'collumn' => 'width', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 30],
                ['id_menu_style_list' => 35, 'id_menu_style' => 10, 'name' => 'Altura', 'collumn' => 'height', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 30],
                ['id_menu_style_list' => 36, 'id_menu_style' => 10, 'name' => 'Cortar em', 'collumn' => 'cut', 'default' => 0, 'order' => 'asc', 'function' => 0, 'legenth' => 0, 'size' => 30],
                ['id_menu_style_list' => 37, 'id_menu_style' => 11, 'name' => 'ID', 'collumn' => 'id_configuration', 'default' => 1, 'order' => 'ASC', 'function' => 0, 'legenth' => 150, 'size' => 10],
                ['id_menu_style_list' => 38, 'id_menu_style' => 11, 'name' => 'Nome', 'collumn' => 'name', 'default' => 0, 'order' => 'ASC', 'function' => 0, 'legenth' => 150, 'size' => 15],
                ['id_menu_style_list' => 39, 'id_menu_style' => 11, 'name' => 'Palavras Chave', 'collumn' => 'keywords', 'default' => 0, 'order' => 'ASC', 'function' => 0, 'legenth' => 150, 'size' => 30],
                ['id_menu_style_list' => 40, 'id_menu_style' => 11, 'name' => 'Codigo Google', 'collumn' => 'analytics', 'default' => 0, 'order' => 'ASC', 'function' => 0, 'legenth' => 150, 'size' => 15],
                ['id_menu_style_list' => 41, 'id_menu_style' => 11, 'name' => 'E-mail', 'collumn' => 'mail', 'default' => 0, 'order' => 'ASC', 'function' => 0, 'legenth' => 150, 'size' => 30],
            ]);
        }
    }
}
