<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('depoimentos', function (Blueprint $table) {
            $table->string('cpf')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('endereco')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cep')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('depoimentos', function (Blueprint $table) {
            //
        });
    }
}
