<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('early_accesses', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('company')->nullable();
            $table->string('role')->nullable();
            $table->json('interests');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('early_accesses');
    }
};
