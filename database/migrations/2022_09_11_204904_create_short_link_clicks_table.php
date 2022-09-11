<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('short_link_clicks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('short_link_id')->constrained();

            $table->string('browser');
            $table->string('country_code', 2)->nullable();
            $table->string('device_type');
            $table->string('referrer_hostname')->nullable();
            $table->string('referrer_pathname')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('short_link_clicks');
    }
};
