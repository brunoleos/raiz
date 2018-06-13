<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1516136916AppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('apps')) {
            Schema::create('apps', function (Blueprint $table) {
                $table->increments('id');
                $table->string('personagem')->nullable();
                $table->string('pontuacaomax')->nullable();
                $table->string('itemcabeca')->nullable();
                $table->string('itemtorso')->nullable();
                $table->string('itemperna')->nullable();
                $table->string('runas')->nullable();
                
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
        Schema::dropIfExists('apps');
    }
}
