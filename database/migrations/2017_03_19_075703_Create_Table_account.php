<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('account',function($table){
            $table->increments('ID');
            $table->string('UserID',10)->nullable(false)->unique();
            $table->string('Name',30)->nullable(false);
            $table->string('Pass',60)->nullable(false);
            $table->date('Birth')->nullable(false);
            $table->string('Dept',50)->nullable(false);
            $table->string('Hall',50)->nullable(true);
            $table->integer('Type')->nullable(false);
            $table->string('Status',10)->nullable(false);
            $table->foreign('Type')->references('ID')->on('user_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
}
