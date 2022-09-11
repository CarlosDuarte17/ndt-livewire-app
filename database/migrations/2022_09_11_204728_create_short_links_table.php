<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('short_links', function (Blueprint $table) {
            $table->id();

            $table->string('hash')->unique();
            $table->string('target', 2000);
            $table->string('title');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('short_links');
    }
};
