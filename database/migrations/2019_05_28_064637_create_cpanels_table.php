<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpanels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->integer('cliend_id')->nullable()->unsigned();
            $table->string('db_name')->nullable();
            $table->string('db_username')->nullable();
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
        Schema::dropIfExists('cpanels');
    }
}
