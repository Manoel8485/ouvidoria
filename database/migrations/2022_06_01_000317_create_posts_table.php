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
        Schema::create('requisicao', function (Blueprint $table) {
            $table->id();
             $table->string('unidade',250);
             $table->integer('categoria');
             $table->string('desc_categoria',250);
             $table->text('descricao');
             $table->string('servidor',250);
             $table->string('rua',250);
             $table->string('numero',10);
             $table->string('bairro',250);
             $table->string('referencia',300);
             $table->string('cidade',250);
             $table->string('estado',250);
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
        Schema::dropIfExists('requisicao');
    }
};
