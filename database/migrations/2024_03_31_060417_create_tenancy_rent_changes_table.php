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
        Schema::create('tenancy_rent_changes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("tenancy_id")->constrained();
            $table->decimal("original_amount");
            $table->foreignId("original_currency_id")->constrained(table: "currencies");
            $table->decimal("new_amount");
            $table->foreignId("new_currency_id")->constrained(table: "currencies");
            $table->dateTime("start_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_rent_changes');
    }
};
