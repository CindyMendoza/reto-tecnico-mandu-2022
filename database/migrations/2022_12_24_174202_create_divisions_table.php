<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->timestamps();
            $table->string('nombre',45)->unique();
            $table->string('supdivision')->nullable();
            $table->integer('subdivision');
            $table->integer('nivel');
            $table->integer('cantidad');
            $table->string('embajador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions');
    }
}
