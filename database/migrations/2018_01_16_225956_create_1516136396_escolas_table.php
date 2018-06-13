<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1516136396EscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('escolas')) {
            Schema::create('escolas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('razao_social')->nullable();
                $table->string('nome_fantasia')->nullable();
                $table->string('cnpj');
                $table->string('endereco')->nullable();
                $table->string('logo')->nullable();
                $table->string('telefone')->nullable();
                $table->string('responsavel')->nullable();
                
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
        Schema::dropIfExists('escolas');
    }
}
