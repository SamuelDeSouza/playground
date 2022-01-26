<?php

use Vendor\samueldesouza\Database\Seeds\SeederConfiguration,
use Vendor\samueldesouza\Database\Seeds\SeederConfigurationMail,
use Vendor\samueldesouza\Database\Seeds\SeederCountries,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStates,
use Vendor\samueldesouza\Database\Seeds\SeederListStyle,
use Vendor\samueldesouza\Database\Seeds\SeederLoginClasses,
use Vendor\samueldesouza\Database\Seeds\SeederLoginPermissions,
use Vendor\samueldesouza\Database\Seeds\SeederLoginUsers,
use Vendor\samueldesouza\Database\Seeds\SeederNavGroup,
use Vendor\samueldesouza\Database\Seeds\SeederNavGroupMenu,
use Vendor\samueldesouza\Database\Seeds\SeederNavGroupMenuChildren,
use Vendor\samueldesouza\Database\Seeds\SeederNavGroupMenuStyle,
use Vendor\samueldesouza\Database\Seeds\SeederNavGroupMenuStyleCollumns,
use Vendor\samueldesouza\Database\Seeds\SeederPermissions,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities2,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities3,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities4,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities5,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities6,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities7,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities8,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities9,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities10,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities11,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities12,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities13,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities14,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities15,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities16,
use Vendor\samueldesouza\Database\Seeds\SeederCountriesStatesCities17,
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
