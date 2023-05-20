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
            $table->string('NIP')->unique()->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('role');
            $table->unsignedBigInteger('division_id')->nullable();
            $table->unsignedBigInteger('bbwsc_office_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['NIP', 'phone', 'role', 'division_id', 'bbwsc_office_id']);
        });
    }
};
