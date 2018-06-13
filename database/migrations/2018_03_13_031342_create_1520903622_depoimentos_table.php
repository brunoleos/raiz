<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1520903622DepoimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('depoimentos')) {
            Schema::create('depoimentos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('foto')->nullable();
                $table->string('nome')->nullable();
                $table->text('depoimento')->nullable();
                
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
        Schema::dropIfExists('depoimentos');
    }
}
