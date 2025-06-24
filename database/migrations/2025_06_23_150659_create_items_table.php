<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
    Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('subtype_id'); // Foreign key to subtypes table
        $table->string('name'); // Name of the item
        $table->text('description')->nullable(); // Description of the item
        $table->decimal('price', 8, 2); // Price of the item
   $table->timestamps();

        // Foreign key constraint
        $table->foreign('subtype_id')->references('id')->on('subtypes')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('items');
}

};
