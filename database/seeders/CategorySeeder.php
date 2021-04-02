<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Еда',
        ]);

        DB::table('categories')->insert([
            'name' => 'Спорт',
        ]);

        DB::table('categories')->insert([
            'name' => 'Транспорт',
        ]);

        DB::table('categories')->insert([
            'name' => 'Здоровье',
        ]);

        DB::table('categories')->insert([
            'name' => 'Товары для дома',
        ]);
    }
}
