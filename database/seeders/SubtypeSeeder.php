<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subtype;
use Illuminate\Support\Facades\DB;

class SubtypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('subtypes')->insert([
            ['id' => 1,  'type_id' => 1, 'name' => 'Tpola predjela',       'created_at' => now(), 'updated_at' => now()],
            ['id' => 2,  'type_id' => 1, 'name' => 'Hladna predjela',      'created_at' => now(), 'updated_at' => now()],
            ['id' => 3,  'type_id' => 1, 'name' => 'Juhe',                 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4,  'type_id' => 1, 'name' => 'Salate',               'created_at' => now(), 'updated_at' => now()],
            ['id' => 5,  'type_id' => 1, 'name' => 'Prilozi',              'created_at' => now(), 'updated_at' => now()],
            ['id' => 6,  'type_id' => 2, 'name' => 'Jela na žara',         'created_at' => now(), 'updated_at' => now()],
            ['id' => 7,  'type_id' => 2, 'name' => 'Jela po narudžbi',     'created_at' => now(), 'updated_at' => now()],
            ['id' => 8,  'type_id' => 2, 'name' => 'Riblji meni',          'created_at' => now(), 'updated_at' => now()],
            ['id' => 9,  'type_id' => 2, 'name' => 'Pice',                 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'type_id' => 4, 'name' => 'Topli napitci',        'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'type_id' => 4, 'name' => 'Alkoholna pića',       'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'type_id' => 4, 'name' => 'Bezalkoholna pića',    'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'type_id' => 4, 'name' => 'Pivo',                 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'type_id' => 4, 'name' => 'Vina',                 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'type_id' => 3, 'name' => 'Deserti',              'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}