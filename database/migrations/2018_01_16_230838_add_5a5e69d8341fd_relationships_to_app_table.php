<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a5e69d8341fdRelationshipsToAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apps', function(Blueprint $table) {
            if (!Schema::hasColumn('apps', 'aluno_id')) {
                $table->integer('aluno_id')->unsigned()->nullable();
                $table->foreign('aluno_id', '108201_5a5e69d626b84')->references('id')->on('alunos')->onDelete('cascade');
                }
                if (!Schema::hasColumn('apps', 'escola_id')) {
                $table->integer('escola_id')->unsigned()->nullable();
                $table->foreign('escola_id', '108201_5a5e69d62f016')->references('id')->on('escolas')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apps', function(Blueprint $table) {
            
        });
    }
}
