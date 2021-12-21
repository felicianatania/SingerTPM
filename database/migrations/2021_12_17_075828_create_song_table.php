<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('singer');
            $table->string('album');
            $table->string('country');
            $table->date('release')->nullable();
            $table->integer('price');
            // $table->unsignedBigInteger('genreId');
            // $table->foreign('genreId')->references('id')->on('genres'); //foreign nama foreign key di id di table genres (ada di migration)
            $table->timestamps();
        });

        return redirect(route('getCreatePage'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
