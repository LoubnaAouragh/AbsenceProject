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
        Schema::create('appartenirs', function (Blueprint $table) {
            $table->foreignId('module_id')->unsigned()->nullable()->references('id')->on('modules')->onDelete('cascade');
            $table->foreignId('filiere_id')->unsigned()->nullable()->references('id')->on('filieres')->onDelete('cascade');
            $table->primary(['module_id','filiere_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appartenirs');
    }
};
