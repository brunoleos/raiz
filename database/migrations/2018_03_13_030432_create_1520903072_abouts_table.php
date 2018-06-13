<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1520903072AboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('abouts')) {
            Schema::create('abouts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('titulo')->nullable();
                $table->string('subtitulo')->nullable();
                $table->text('conteudo')->nullable();
                $table->string('imagem')->nullable();
                
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
        Schema::dropIfExists('abouts');
    }
}
