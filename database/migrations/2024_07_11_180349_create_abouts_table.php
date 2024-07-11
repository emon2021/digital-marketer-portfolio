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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->string('phone',11)->nullable();
            $table->string('whatsapp',11)->nullable();
            $table->string('nationality',110)->nullable();
            $table->string('email',255)->nullable();
            $table->string('freelance',100)->nullable();
            $table->string('lang',255)->nullable();
            $table->string('experience',255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
