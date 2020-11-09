<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributeForeinkeyIntoThepostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('theposts', function (Blueprint $table) {
            $table->foreign('id_thepost_cat')->references('id_thepost_cat')->on('thepost_cats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('theposts', function (Blueprint $table) {
            //
        });
    }
}
