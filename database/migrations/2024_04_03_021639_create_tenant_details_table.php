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
        Schema::create('tenant_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->nullable();
            $table->string("name");
            $table->string("id_number");
            $table->string("phone_number");
            $table->string("next_of_kin_name");
            $table->string("next_of_kin_contact");
            $table->string("occupation");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_details');
    }
};
