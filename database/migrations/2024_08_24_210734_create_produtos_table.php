<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void

    {

        Schema::create('produtos', function (Blueprint $table) {

            $table->id();

            $table->string('descricao');

            $table->integer('qtd');

            $table->float('precoUnitario');

            $table->float('precoVenda');

	        $table->timestamps();

        });

    }
};
