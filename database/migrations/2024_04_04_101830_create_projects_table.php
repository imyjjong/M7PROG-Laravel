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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

Schema::create('projects', function (Blueprint $projects) {
    $projects->id();
    $projects->string('title');
    $projects->string("intro");
    $projects->text('description')->nullable();
    $projects->string('languages');
    $projects->boolean('active')->default(false);
    $projects->timestamps();
});