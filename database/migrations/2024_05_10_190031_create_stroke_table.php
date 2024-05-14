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
        Schema::create('stroke', function (Blueprint $table) {
            $table->id();
            $table->boolean('gender');
            $table->integer('age');
            $table->boolean('hypertension');
            $table->boolean('heart_disease');
            $table->boolean('ever_married');
            $table->integer('work_type');
            $table->boolean('residence_type');
            $table->float('avg_glucose_level');
            $table->float('bmi');
            $table->integer('smoking_status');
            $table->boolean('stroke');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stroke');
    }
};
