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
        Schema::table('types', function (Blueprint $table) {
              $table->string('name_en')->nullable();
            $table->string('name_de')->nullable();
        });
    }

    /**
     * Reverse the migrations.ww
     */
    public function down(): void
    {
        Schema::table('types', function (Blueprint $table) {
                        $table->dropColumn(['name_en', 'name_de']);

        });
    }
};
