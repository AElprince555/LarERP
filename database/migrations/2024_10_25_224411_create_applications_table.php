<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\General\System\SubModule::class)->constrained()
            ->onDelete('restrict')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('applications');
    }
};
