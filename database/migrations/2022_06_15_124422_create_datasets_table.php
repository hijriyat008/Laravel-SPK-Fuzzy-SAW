<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('nama');
            $table->string('nim')->unique();
            $table->enum('jk', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('no_hp')->unique();
            $table->enum('status', ['Non Penerima', 'Penerima']);
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
        Schema::dropIfExists('datasets');
    }
}
