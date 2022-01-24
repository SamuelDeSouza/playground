<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVprNavGroupMenuSearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Core table vpr_nav_group_menu_search
        Schema::create('vpr_nav_group_menu_search', function (Blueprint $table) {
            $table->increments('id_menu_search');
            $table->integer('id_menu')->unsigned();
            $table->foreign('id_menu')->references('id_nav_group_menu')->on('vpr_nav_group_menu');

            $table->string('collumn', 255);

            $table->boolean('delete')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamp('created_at')->useCurrent(); 
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the table
        Schema::dropIfExists('vpr_nav_group_menu_search');
    }
}
