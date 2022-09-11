<?php

use App\Enums\CampaignStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->constrained('users');

            $table->text('content');
            $table->string('handle');
            $table->enum('status', CampaignStatus::getValues())->default(CampaignStatus::PRIVATE);
            $table->string('summary');
            $table->string('title');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
