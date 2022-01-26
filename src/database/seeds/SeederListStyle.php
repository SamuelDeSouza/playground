<?php

use Illuminate\Database\Seeder;

class SeederListStyle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table vpr_list_style is empty
        if(DB::table('vpr_list_style')->count() == 0){
            DB::table('vpr_list_style')->insert([
                ['id_style' => 1, 'name' => 'Lista', 'file' => 'listLines'],
                ['id_style' => 2, 'name' => 'Lista com Imagem', 'file' => 'listLineImages'],
                ['id_style' => 3, 'name' => 'Imagem', 'file' => 'listImages'],
                ['id_style' => 4, 'name' => 'Permissões', 'file' => 'permissoes'],
                ['id_style' => 5, 'name' => 'Collunas p/ Stilo', 'file' => 'menustylecollumn'],
                ['id_style' => 6, 'name' => 'Gerenciamento', 'file' => 'management']
            ]);
        }
    }
}