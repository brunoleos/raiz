<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a5e68adec87bRelationshipsToAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alunos', function(Blueprint $table) {
            if (!Schema::hasColumn('alunos', 'escola_id')) {
                $table->integer('escola_id')->unsigned()->nullable();
                $table->foreign('escola_id', '108200_5a5e68ac02294')->references('id')->on('escolas')->onDelete('cascade');
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
        Schema::table('alunos', function(Blueprint $table) {
            
        });
    }
}
