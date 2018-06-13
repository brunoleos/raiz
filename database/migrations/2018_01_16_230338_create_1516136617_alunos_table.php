<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1516136617AlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('alunos')) {
            Schema::create('alunos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome')->nullable();
                $table->string('idade')->nullable();
                $table->string('serie')->nullable();
                $table->string('turma')->nullable();
                $table->string('turno')->nullable();
                $table->string('endereco')->nullable();
                $table->string('nome_do_responsavel')->nullable();
                $table->string('cpf_do_responsavel')->nullable();
                $table->string('telefone_do_responsavel')->nullable();
                $table->string('email_do_responsavel')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
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
        Schema::dropIfExists('alunos');
    }
}
