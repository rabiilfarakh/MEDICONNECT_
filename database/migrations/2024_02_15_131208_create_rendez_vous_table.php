<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousTable extends Migration
{
    public function up()
    {
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id'); 
            $table->unsignedBigInteger('medecin_id'); 
            $table->text('date');
            $table->enum('type', ['simple', 'urgent'])->default('simple');
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('medecin_id')->references('id')->on('medecins');
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('rendez_vous');
    }
}

