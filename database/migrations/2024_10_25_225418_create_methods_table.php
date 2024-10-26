<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('methods', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\General\System\Application::class)->constrained()
            ->onUpdate('cascade')
            ->onDelete('restrict');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('short');
            $table->string('description')->nullable();
            $table->string('component')->nullable();
            $table->string('view')->nullable();
            $table->string('model')->nullable();
            $table->string('controller')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('methods');
    }
};
