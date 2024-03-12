<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatahitungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datahitungs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dataset_id')->unique();
            $table->enum('status', ['Valid', 'Not Valid', 'Proses']);
            $table->string('penghasilan_orangtua');
            $table->string('tanggungan_orangtua');
            $table->string('status_rumah');
            $table->string('kondisi_rumah');
            $table->string('aset');
            $table->string('kendaraan');
            $table->string('usia');
            $table->string('bantuan');
            $table->string('ipk');
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
        Schema::dropIfExists('datahitungs'); {
        }
    }
}
