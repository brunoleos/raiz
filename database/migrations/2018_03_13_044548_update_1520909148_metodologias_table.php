<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1520909148MetodologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('metodologias', function (Blueprint $table) {
            
if (!Schema::hasColumn('metodologias', 'titulo')) {
                $table->string('titulo')->nullable();
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
        Schema::table('metodologias', function (Blueprint $table) {
            $table->dropColumn('titulo');
            
        });

    }
}
