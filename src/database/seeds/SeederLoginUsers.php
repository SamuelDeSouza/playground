<?php

use Illuminate\Database\Seeder;

class SeederLoginUsers extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // check if table vpr_login_users is empty
        if(DB::table('vpr_login_users')->count() == 0){
            DB::table('vpr_login_users')->insert([
                [
                    'id_login_user' => 1,
                    'id_class' => 1,
                    'id_permission' => 1,
                    'name' => 'Suporte Vk2',
                    'email' => 'suporte@vk2.com.br',
                    'password' => '$2y$10$2f.k9tG38STYu0Gy8eMe5O8E0KzWAQMdvoKpXd7Z7drPoAxfPV.Sm',
                    'remember_token' => '4M4sPv4f6iyXMKKRE0DBupXVCqxu2X9uN7CUxqviA5xTe1KWu2da0WbjI2RW',
                ],
            ]);
        }
    }
}