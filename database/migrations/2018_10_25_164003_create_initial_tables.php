<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acessos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mac', 17);
            $table->datetime('dia_hora');
            $table->string('gateway_node', 15);
            $table->string('localizacao', 500);
            $table->timestamps();
        });

        Schema::create('cadastros', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('celular');
            $table->string('email', 500);
            $table->string('nome', 500);
            $table->timestamps();
        });

        Schema::create('sensores_agua', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('dia_hora');
            $table->enum('estado', ['D', 'L']);
            $table->unsignedInteger('acesso_id')->nullable();
            $table->timestamps();
            
            $table->foreign('acesso_id')
                ->references('id')->on('acessos');
        });

        Schema::create('sensores_luz', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('dia_hora');
            $table->enum('estado', ['D', 'L']);
            $table->unsignedInteger('acesso_id')->nullable();
            $table->timestamps();
            
            $table->foreign('acesso_id')
                ->references('id')->on('acessos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
