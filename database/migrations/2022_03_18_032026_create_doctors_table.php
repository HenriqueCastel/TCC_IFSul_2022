<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nome');
            $table->string('dataDeNascimento');
            $table->char('rg')->unique();
            $table->string('cpf')->unique();
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cep');
            $table->string('especialidade');
            $table->string('localizacoes');
            $table->double('valorDaConsulta');
            $table->string('convenios');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('doctors');
    }
}
