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
        Schema::create('rod_branches', function (Blueprint $table) {
            $table->id('ROD_ID'); // Primary key
            $table->integer('ROD_SERIES'); // Series as a number (e.g., 1, 2, 3)
            $table->string('ROD_BRANCHNAME'); // Branch name
            $table->string('ROD_ADDRESS'); // Address
            $table->string('ROD_STATUS'); // Status (e.g., Active, Inactive)
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rod_branches');
    }
};
