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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('cover_path', 1024)
                ->nullable();
            $table->string('thumbnail_path', 1024)
                ->nullable();
            $table->boolean('auto_approval')
                ->default(true);
            $table->text('about')
                ->nullable();
            $table->foreignIdFor(model: \App\Models\User::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamp('deleted_at')
                ->nullable();
            $table->foreignId('deleted_by')
                ->nullable()
                ->references('id')
                ->on('users')
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
