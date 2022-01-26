<?php

namespace samueldesouza\playground\Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SeederConfiguration::class,
            SeederConfigurationMail::class,
            SeederCountries::class,
            SeederCountriesStates::class,
            SeederListStyle::class,
            SeederLoginClasses::class,
            SeederLoginPermissions::class,
            SeederLoginUsers::class,
            SeederNavGroup::class,
            SeederNavGroupMenu::class,
            SeederNavGroupMenuChildren::class,
            SeederNavGroupMenuStyle::class,
            SeederNavGroupMenuStyleCollumns::class,
            SeederPermissions::class,
            SeederCountriesStatesCities::class,
            SeederCountriesStatesCities2::class,
            SeederCountriesStatesCities3::class,
            SeederCountriesStatesCities4::class,
            SeederCountriesStatesCities5::class,
            SeederCountriesStatesCities6::class,
            SeederCountriesStatesCities7::class,
            SeederCountriesStatesCities8::class,
            SeederCountriesStatesCities9::class,
            SeederCountriesStatesCities10::class,
            SeederCountriesStatesCities11::class,
            SeederCountriesStatesCities12::class,
            SeederCountriesStatesCities13::class,
            SeederCountriesStatesCities14::class,
            SeederCountriesStatesCities15::class,
            SeederCountriesStatesCities16::class,
            SeederCountriesStatesCities17::class,
        ]);
    }
}
