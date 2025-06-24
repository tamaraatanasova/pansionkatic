<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TypeSeeder extends Seeder
{
      public function run()
    {
        DB::table('types')->insert([
            [
                'id' => 1,
                'name' => 'Predjela',
                'image_url' => 'http://localhost/images/appetizers.jpg',
                'created_at' => Carbon::parse('2025-06-23 14:03:06'),
                'updated_at' => Carbon::parse('2025-06-23 14:03:06'),
            ],
            [
                'id' => 2,
                'name' => 'Glavna jela',
                'image_url' => 'http://localhost/images/main_courses.jpg',
                'created_at' => Carbon::parse('2025-06-23 14:03:06'),
                'updated_at' => Carbon::parse('2025-06-23 14:03:06'),
            ],
            [
                'id' => 3,
                'name' => 'Deserti',
                'image_url' => 'http://localhost/images/desserts.jpg',
                'created_at' => Carbon::parse('2025-06-23 14:03:06'),
                'updated_at' => Carbon::parse('2025-06-23 14:03:06'),
            ],
            [
                'id' => 4,
                'name' => 'Pića',
                'image_url' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
