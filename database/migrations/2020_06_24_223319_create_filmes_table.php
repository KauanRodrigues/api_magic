<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('filmes'))
        {
            Schema::create('filmes', function (Blueprint $table) {
                $table->id();
                $table->string('filme', 150)->unique();
                $table->string('classificacao', 20);
                $table->mediumText('atores');
                $table->string('diretor', 150);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmes');
    }
}
