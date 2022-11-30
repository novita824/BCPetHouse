<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesPenitipanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_penitipan', function (Blueprint $table) {
            $table->id();
            $table->string('namahewan');
            $table->string('namapemilik');
            $table->string('alamat');
            $table->string('sediapetcargo');
            $table->string('sediakandang');
            $table->string('tanggalpenginapan');
            $table->string('jenispaket');
            $table->string('berapakalimakan');
            $table->string('pakan');
            $table->string('riwayatvaksin');
            $table->string('kontak');
            $table->string('riwayatpenyakit');
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
        Schema::dropIfExists('services_penitipan');
    }
}
