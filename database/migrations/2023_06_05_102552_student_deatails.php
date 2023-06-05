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
        Schema::create('studentdata', function (Blueprint $table) {
            $table->id();
            $table->string('name',225);
            $table->string('registration_number',225);
            $table->string('contact_number',225);
            $table->integer('year');
            $table->String('stream',225);
            $table->String('stream_subjects',225)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentdata');
    }
};
