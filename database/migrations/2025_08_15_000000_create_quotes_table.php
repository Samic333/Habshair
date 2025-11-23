<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_email')->nullable();
            $table->string('service_type')->index();
            $table->string('status')->default('new')->index();
            $table->string('country')->nullable();
            $table->string('departure_location')->nullable();
            $table->string('destination_location')->nullable();
            $table->string('aircraft_type')->nullable();
            $table->string('cargo_type')->nullable();
            $table->unsignedInteger('rotations')->default(1);
            $table->string('drone_mission_area')->nullable();
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->text('notes')->nullable();
            $table->text('details')->nullable();
            $table->text('internal_notes')->nullable();
            $table->foreignId('staff_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
