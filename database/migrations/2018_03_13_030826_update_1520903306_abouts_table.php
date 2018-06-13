<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1520903306AboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            
if (!Schema::hasColumn('abouts', 'numero')) {
                $table->string('numero')->nullable();
                }
if (!Schema::hasColumn('abouts', 'chamada')) {
                $table->string('chamada')->nullable();
                }
if (!Schema::hasColumn('abouts', 'beneficios')) {
                $table->text('beneficios')->nullable();
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
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn('numero');
            $table->dropColumn('chamada');
            $table->dropColumn('beneficios');
            
        });

    }
}
