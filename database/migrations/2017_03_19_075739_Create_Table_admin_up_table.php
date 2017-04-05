<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdminUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('admin_up_table',function(Blueprint $table){
            $table->integer('ID')->primary();
            $table->string('UserID',10)->nullable(false);
            $table->string('Pass',60)->nullable(false);
            $table->string('Name',30)->nullable(false);
            $table->string('Type',10)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_up_table');
    }
}
