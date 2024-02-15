<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('driver_id');
                $table->unsignedBigInteger('passenger_id');
                $table->string('status');
                $table->unsignedBigInteger('trajet_id');
                $table->foreign('driver_id')->references('id')->on('drivers')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreign('passenger_id')->references('id')->on('passengers')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreign('trajet_id')->references('id')->on('trajets')->cascadeOnDelete()->cascadeOnUpdate();
                $table->timestamps();
            });
        }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
