<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_books_', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaBuku');
            $table->integer('tipeBuku');
            $table->string('penulis');
            $table->string('penerbit');
            $table->date('tahunTerbit');
            $table->string('imageBuku');
            $table->text('ringkasan');
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
        Schema::dropIfExists('_books_');
    }
}
