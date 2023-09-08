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
        Schema::create('company_detail', function (Blueprint $table) {
            $table->id();
            $table->string('company name')->nullable();
            $table->string('company address')->nullable();
            $table->string('company email')->nullable();
            $table->string('company phone')->nullable();
            $table->string('website(URL)')->nullable();
            $table->string('company experience')->nullable();
            $table->string('title text')->nullable();
            $table->string('description text')->nullable();
            $table->string('logo image')->nullable();
            $table->string('favicon image')->nullable();
            $table->string('facebook link')->nullable();
            $table->string('instagram link')->nullable();
            $table->string('twitter link')->nullable();
            $table->string('linkedIn link')->nullable();
            $table->string('additional information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('company_detail');
    }
};
