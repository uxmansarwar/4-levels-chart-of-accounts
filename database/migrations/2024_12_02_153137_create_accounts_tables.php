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
        Schema::create('account_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('account_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_category_id')->nullable()->constrained('account_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('account_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_type_id')->nullable()->constrained('account_types')->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_detail_id')->nullable()->constrained('account_details')->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->decimal('balance', 65, 2)->default('0.00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_categories');
        Schema::dropIfExists('account_types');
        Schema::dropIfExists('account_details');
        Schema::dropIfExists('accounts');
    }
};
