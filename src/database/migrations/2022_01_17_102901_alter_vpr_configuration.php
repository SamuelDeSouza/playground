<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterVprConfiguration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Adicionado colunas de order e modificado coluna de hash para aceitar valores null
        Schema::table('vpr_configuration', function (Blueprint $table) {
            $table->boolean('site_on')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remove modificações
        Schema::table('vpr_configuration', function (Blueprint $table) {
            $table->dropColumn('site_on');
        });
    }
}
