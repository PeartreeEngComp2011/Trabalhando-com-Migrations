<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro_departamento', function (Blueprint $table) {
            $table->unsignedBigInteger('membro_id');
            $table->unsignedBigInteger('departamento_id');
            $table->foreign('membro_id')->references('id')
            ->on('membro')->onDelete('cascade');
            $table->foreign('departamento_id')->references('id')
            ->on('departamento')->onDelete('cascade');
            $table->primary(['membro_id','departamento_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membro_departamento');
    }
};
