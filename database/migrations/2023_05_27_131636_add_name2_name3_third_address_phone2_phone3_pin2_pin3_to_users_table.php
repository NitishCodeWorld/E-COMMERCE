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
            $table->string('name2')->nullable();
            $table->string('name3')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();
            $table->string('third_address')->nullable();
            $table->string('pin2')->nullable();
            $table->string('pin3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name2');
            $table->dropColumn('name3');
            $table->dropColumn('phone2');
            $table->dropColumn('phone3');
            $table->dropColumn('third_address');
            $table->dropColumn('pin2');
            $table->dropColumn('pin3');
        });
    }
};
