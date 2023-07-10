<?php

use App\Enums\NewsStatuses;
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
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('body');
            $table->string('image')->nullable();

            $table->foreignId('user_id')
                ->default(1)
                ->references('id')
                ->on('users');

            $table->enum('status', NewsStatuses::all())
                ->default(NewsStatuses::DRAFT->value);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
