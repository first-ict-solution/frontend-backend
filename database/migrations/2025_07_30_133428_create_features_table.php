<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('features', function (Blueprint $table) {
        $table->id();
        $table->string('features');
        $table->unsignedBigInteger('service_id'); // make sure it's unsignedBigInteger

        $table->timestamps();

        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
