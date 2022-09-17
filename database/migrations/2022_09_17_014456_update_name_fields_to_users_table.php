<?php

use App\Enums\UserRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class () extends Migration {
    public function up()
    {
        $roleValues = implode(',', array_map(fn (string $value) => "'{$value}'", UserRole::getValues()));

        DB::statement("ALTER TABLE `users` CHANGE `rol` `role` enum($roleValues)");
    }

    public function down(): void
    {
        $roleValues = implode(',', array_map(fn (string $value) => "'{$value}'", UserRole::getValues()));

        DB::statement("ALTER TABLE `users` CHANGE `role` `rol` enum($roleValues)");
    }
};
