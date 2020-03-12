<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('config_id');
            $table->string('nama_perusahaan',100);
            $table->text('deskripsi');
            $table->string('email',50);
            $table->string('telepon',20);
            $table->string('alamat',150);
            $table->string('kota',100);
            $table->string('kode_pos',6);
            $table->string('facebook',100);
            $table->string('instagram',100);
            $table->string('logo',255);
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
        Schema::dropIfExists('configs');
    }
}
