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
        Schema::table('users', function (Blueprint $table) {
            $table->string("profile")->default("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJDR4sKM3AQYR_sVbSyCiik89zi2eOWLEwUA&s");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("profile");
        });
    }
};
