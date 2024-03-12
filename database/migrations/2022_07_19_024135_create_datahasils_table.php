<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatahasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datahasils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dataset_id');
            $table->foreignId('datahitung_id');
            $table->enum('status', ['Belum Menerima', 'Not Valid', 'Valid', 'Sudah Menerima']);
            $table->date('tgl_penerimaan')->nullable();
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
        Schema::dropIfExists('datahasils');
    }
}
