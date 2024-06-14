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
        Schema::create('referees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained();
            $table->string('referee1_name');
            $table->string('referee1_relationship');
            $table->string('referee1_contact');
            $table->string('referee2_name');
            $table->string('referee2_relationship');
            $table->string('referee2_contact');
            $table->string('st_chair_name');
            $table->string('st_chair_contact');
            $table->string('lc_chair_name');
            $table->string('lc_chair_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referees');
    }
};
