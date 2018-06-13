<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a5e682a5c853RelationshipsToProfessoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professores', function(Blueprint $table) {
            if (!Schema::hasColumn('professores', 'escola_id')) {
                $table->integer('escola_id')->unsigned()->nullable();
                $table->foreign('escola_id', '108199_5a5e68283ea8c')->references('id')->on('escolas')->onDelete('cascade');
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
        Schema::table('professores', function(Blueprint $table) {
            
        });
    }
}
