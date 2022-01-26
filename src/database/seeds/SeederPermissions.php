<?php

use Illuminate\Database\Seeder;

class SeederPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table vpr_login_permissions is empty
        if(DB::table('vpr_login_permissions')->count() == 0){
            DB::table('vpr_login_permissions')->insert([
                ['id_permission' => 1, 'id_menu' => 1, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 2, 'id_menu' => 2, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 3, 'id_menu' => 3, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 4, 'id_menu' => 4, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 5, 'id_menu' => 5, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 6, 'id_menu' => 6, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 7, 'id_menu' => 7, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 8, 'id_menu' => 8, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 9, 'id_menu' => 9, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 10, 'id_menu' => 10, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
                ['id_permission' => 11, 'id_menu' => 11, 'id_group' => 1, 'id_user' => 1, 'view' => 1, 'edit' => 1, 'add' => 1, 'upload' => 1, 'delete' => 1, 'status' => 1]
            ]);
        }
    }
}
