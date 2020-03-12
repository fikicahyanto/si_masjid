<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori',50);
            $table->timestamps();
        });

        //Set FK di Kolom kategori_id di table blogs
        Schema::table('blogs', function (Blueprint $table){
            $table->foreign('kategori_id')
            ->references('id')
            ->on('kategoris')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        //Set FK di Kolom kategori_id di table galleries
        Schema::table('galleries', function (Blueprint $table){
            $table->foreign('kategori_id')
            ->references('id')
            ->on('kategoris')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop FK kategori_id di table blogs
        Schema::table('blogs',function(Blueprint $table){
            $table->dropForeign('blogs_kategori_id_foreign');
        });

        //Drop FK kategori_id di table galleries
        Schema::table('galleries',function(Blueprint $table){
            $table->dropForeign('galleries_kategori_id_foreign');
        });
        Schema::dropIfExists('kategoris');
    }
}
