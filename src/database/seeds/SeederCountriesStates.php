<?php

use Illuminate\Database\Seeder;

class SeederCountriesStates extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table vpr_countries_states is empty
        if(DB::table('vpr_countries_states')->count() == 0){
            DB::table('vpr_countries_states')->insert([
                [
                    'id_state' => 1,
                    'id_country' => 1,
                    'name' => 'Acre',
                    'uf' => 'AC',
                ],
                [
                    'id_state' => 1,
                    'id_country' => 1,
                    'name' => 'Alagoas',
                    'uf' => 'AL',
                ],
                [
                    'id_state' => 3,
                    'id_country' => 1,
                    'name' => 'Amapá',
                    'uf' => 'AP',
                ],
                [
                    'id_state' => 4,
                    'id_country' => 1,
                    'name' => 'Amazonas',
                    'uf' => 'AM',
                ],
                [
                    'id_state' => 5,
                    'id_country' => 1,
                    'name' => 'Bahia',
                    'uf' => 'BA',
                ],
                [
                    'id_state' => 6,
                    'id_country' => 1,
                    'name' => 'Ceará',
                    'uf' => 'CE',
                ],
                [
                    'id_state' => 7,
                    'id_country' => 1,
                    'name' => 'Distrito Federal',
                    'uf' => 'DF',
                ],
                [
                    'id_state' => 8,
                    'id_country' => 1,
                    'name' => 'Espírito Santo',
                    'uf' => 'ES',
                ],
                [
                    'id_state' => 9,
                    'id_country' => 1,
                    'name' => 'Goiás',
                    'uf' => 'GO',
                ],
                [
                    'id_state' => 10,
                    'id_country' => 1,
                    'name' => 'Maranhão',
                    'uf' => 'MA',
                ],
                [
                    'id_state' => 11,
                    'id_country' => 1,
                    'name' => 'Mato Grosso',
                    'uf' => 'MT',
                ],
                [
                    'id_state' => 12,
                    'id_country' => 1,
                    'name' => 'Mato Grosso do Sul',
                    'uf' => 'MS',
                ],
                [
                    'id_state' => 13,
                    'id_country' => 1,
                    'name' => 'Minas Gerais',
                    'uf' => 'MG',
                ],
                [
                    'id_state' => 14,
                    'id_country' => 1,
                    'name' => 'Pará',
                    'uf' => 'PA',
                ],
                [
                    'id_state' => 15,
                    'id_country' => 1,
                    'name' => 'Paraíba',
                    'uf' => 'PB',
                ],
                [
                    'id_state' => 16,
                    'id_country' => 1,
                    'name' => 'Paraná',
                    'uf' => 'PR',
                ],
                [
                    'id_state' => 17,
                    'id_country' => 1,
                    'name' => 'Pernambuco',
                    'uf' => 'PE',
                ],
                [
                    'id_state' => 18,
                    'id_country' => 1,
                    'name' => 'Piauí',
                    'uf' => 'PI',
                ],
                [
                    'id_state' => 19,
                    'id_country' => 1,
                    'name' => 'Rio de Janeiro',
                    'uf' => 'RJ',
                ],
                [
                    'id_state' => 20,
                    'id_country' => 1,
                    'name' => 'Rio Grande do Norte',
                    'uf' => 'RN',
                ],
                [
                    'id_state' => 21,
                    'id_country' => 1,
                    'name' => 'Rio Grande do Sul',
                    'uf' => 'RS',
                ],
                [
                    'id_state' => 22,
                    'id_country' => 1,
                    'name' => 'Rondônia',
                    'uf' => 'RO',
                ],
                [
                    'id_state' => 23,
                    'id_country' => 1,
                    'name' => 'Roraima',
                    'uf' => 'RR',
                ],
                [
                    'id_state' => 24,
                    'id_country' => 1,
                    'name' => 'Santa Catarina',
                    'uf' => 'SC',
                ],
                [
                    'id_state' => 25,
                    'id_country' => 1,
                    'name' => 'São Paulo',
                    'uf' => 'SP',
                ],
                [
                    'id_state' => 26,
                    'id_country' => 1,
                    'name' => 'Sergipe',
                    'uf' => 'SE',
                ],
                [
                    'id_state' => 27,
                    'id_country' => 1,
                    'name' => 'Tocantins',
                    'uf' => 'TO',
                ]
            ]);
        }
    }
}