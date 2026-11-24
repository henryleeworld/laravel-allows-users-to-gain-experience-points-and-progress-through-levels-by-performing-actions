<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use LevelUp\Experience\Support\UserForeignKey;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(config('level-up.tables.experiences'), function (Blueprint $table) {
            $table->entityId();
            UserForeignKey::on($table)->constrained(config('level-up.user.users_table'));
            $table->entityForeignId('level_id')->constrained(table: config('level-up.tables.levels'));
            $table->integer('experience_points')->default(0)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(config('level-up.tables.experiences'));
    }
};
