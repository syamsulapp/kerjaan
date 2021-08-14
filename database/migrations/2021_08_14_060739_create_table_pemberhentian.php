<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePemberhentian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pemberhentian', function (Blueprint $table) {
            $table->id();
            $table->string('noreg',128)->unique();
            $table->string('nama',128);
            $table->string('jk',50);
            $table->string('provinsi',128);
            $table->string('kabupaten',128);
            $table->string('objekkdh',128);
            $table->string('penyebabkdh',128);
            $table->string('upload1',128);
            $table->string('upload2',128);
            $table->string('upload3',128);
            $table->string('upload4',128);
            $table->string('upload5',128);
            $table->string('upload6',128);

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
        Schema::dropIfExists('table_pemberhentian');
    }
}
