<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CommentNews', function (Blueprint $table) {
            $table->increments('com_id');
            $table->string('com_email')->nullable()->default('NULL');
            $table->string('com_name')->nullable()->default('NULL');
            $table->string('com_content')->nullable()->default('NULL');
            $table->string('com_news')->nullable()->default('NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CommentNews');
    }
}
