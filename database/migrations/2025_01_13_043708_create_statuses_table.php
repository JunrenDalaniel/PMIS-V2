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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id('status_id'); // Primary key
            $table->string('status_series')->unique()->default(''); // Default value added
            $table->string('status_name'); // Status name
            $table->enum('status_type', ['On Process', 'Deficiency', 'Encumbered'])
                ->default('On Process'); // Set the default value to 'on_process'
            $table->enum('status_status', ['active', 'inactive'])->default('active'); // Status status
            $table->timestamps(); // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
