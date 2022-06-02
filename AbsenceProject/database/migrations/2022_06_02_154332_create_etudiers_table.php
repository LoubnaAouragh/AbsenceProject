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
        Schema::create('etudiers', function (Blueprint $table) {
            $table->foreignId('seance_id')->unsigned()->nullable()->references('id')->on('seances')->onDelete('cascade');
            $table->foreignId('etudiant_id')->unsigned()->nullable()->references('id')->on('etudiants')->onDelete('cascade');
            $table->primary(['seance_id','etudiant_id']);
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
        Schema::dropIfExists('etudiers');
    }
};
