<?php

use App\Enums\UserRole;
use App\Enums\UserStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('position');
            $table->enum('rol', UserRole::getValues());
            $table->enum('status', UserStatus::getValues())->default(UserStatus::ACTIVE);
            $table->string('telephone');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('position');
            $table->dropColumn('status');
            $table->dropColumn('telephone');
        });
    }
};
