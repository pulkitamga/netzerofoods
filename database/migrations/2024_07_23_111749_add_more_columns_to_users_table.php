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
            $table->string('postcode')->nullable();
            $table->string('address_confirmation')->nullable();
            $table->boolean('experience_with_market_spaces')->nullable();
            $table->text('sustainability_practices')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['postcode', 'address_confirmation', 'experience_with_market_spaces', 'sustainability_practices']);
        });
    }
};