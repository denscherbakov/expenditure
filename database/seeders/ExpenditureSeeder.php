<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExpenditureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++){
            DB::table('expenditures')->insert([
                'name' => Str::random(10),
                'sum' => mt_rand(10, 1000),
                'category_id' => mt_rand(1, 5),
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-' . mt_rand(1, 28) . ' h:i:s'),
            ]);
        }
    }
}
