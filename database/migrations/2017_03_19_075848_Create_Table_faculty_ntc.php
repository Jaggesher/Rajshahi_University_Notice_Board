<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFacultyNtc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('faculty_ntc',function(Blueprint $table){
            $table->integer('ID')->primary();
            $table->string('Message',1000)->nullable(false);
            $table->date('StartDat')->nullable(false);
            $table->date('EndDat')->nullable(false);
            $table->integer('Type')->nullable(false);
            $table->string('Faculty',50)->nullable(false);
            $table->string('Dept',50)->nullable(false);
            $table->integer('UploaderID')->nullable(false);
            $table->foreign('Type')->references('ID')->on('user_type');
            $table->foreign('UploaderID')->references('ID')->on('admin_up_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty_ntc');
    }
}
