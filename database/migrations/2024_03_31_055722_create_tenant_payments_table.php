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
        Schema::create('tenant_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId("payment_id")->constrained();
            $table->foreignId("tenancy_id")->constrained();
            $table->foreignId("payable_id")->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_payments');
    }
};
