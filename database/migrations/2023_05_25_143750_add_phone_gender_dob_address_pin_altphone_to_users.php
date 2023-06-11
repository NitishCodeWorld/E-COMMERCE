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
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('default_address')->nullable();
            $table->string('second_address')->nullable();
            $table->integer('pin')->nullable();
            $table->string('alt_phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
            $table->dropColumn('default_address');
            $table->dropColumn('second_address');
            $table->dropColumn('pin');
            $table->dropColumn('alt_phone');
        });
    }
};
