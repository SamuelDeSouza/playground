<?php

use Illuminate\Database\Seeder;

class SeederConfiguration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table vpr_configuration is empty
        if(DB::table('vpr_configuration')->count() == 0){
            DB::table('vpr_configuration')->insert([
                [
                    'id_configuration' => 1,
                    'name' => 'Onde Anda',
                    'keywords' => 'Tratores, Ferramentas, Agricolas, Colheitadeiras',
                    'analytics' => '-',
                    'mail' => 'suporte@vk2.com.br',
                    'description' => '<p>Via Tractor</p>',
                    'site_on' => 1
                ]
            ]);
        }
    }
}