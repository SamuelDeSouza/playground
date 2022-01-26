<?php

use Illuminate\Database\Seeder;

class SeederLoginPermissions extends Seeder
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
                ['id_login_permission' => 1, 'name' => 'Administrador'],
                ['id_login_permission' => 2, 'name' => 'Usuário'],
            ]);
        }
    }
}
