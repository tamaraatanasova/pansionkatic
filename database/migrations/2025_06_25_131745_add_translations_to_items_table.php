<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('name_en')->nullable()->after('name');
            $table->string('name_de')->nullable()->after('name_en');

            $table->text('description_en')->nullable()->after('description');
            $table->text('description_de')->nullable()->after('description_en');
        });
    }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn(['name_en', 'name_de', 'description_en', 'description_de']);
        });
    }
};
