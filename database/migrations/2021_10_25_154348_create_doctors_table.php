<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rut')->unique()->unsigned()->nullable();
            $table->string('doctor_names', 30)->nullable()->default('text');
            $table->string('doctor_lastnames', 30)->nullable()->default('text');
            $table->string('email', 30)->unique()->nullable()->default('text');
            $table->string('direccion', 30)->nullable()->default('text');
            $table->enum('especialidad', ['cardiologia', 'dermatologia','hematologia'])->nullable()->default('cardiologia');
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
        Schema::dropIfExists('doctors');
    }
}
