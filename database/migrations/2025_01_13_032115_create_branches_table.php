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
        Schema::create('branches', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Branch name
            $table->text('address'); // Branch address
            $table->enum('status', ['active', 'inactive'])->default('active'); // Branch status
            $table->string('contact_number')->nullable(); // Contact number, optional
            $table->string('email')->nullable(); // Email address, optional
            $table->timestamps(); // Created at and Updated at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
