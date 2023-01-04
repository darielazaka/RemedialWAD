<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_goods', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_Goods');
            $table->string('Nama_Goods', 255);
            $table->string('Manufacture', 255);
            $table->string('Stok', 255);
            $table->datetime('tanggal_beli');
            $table->text('deskripsi');
            $table->string('Foto', 255);
            $table->enum('status', ['Lunas', 'Belum-Lunas',])->default('Belum-Lunas');
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
        //
    }
};
