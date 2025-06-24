<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
{
    Schema::create('subtypes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('type_id'); // Foreign key to types table
        $table->string('name'); // Name of the subtype
        $table->timestamps();

        // Foreign key constraint
        $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('subtypes');
}

};
