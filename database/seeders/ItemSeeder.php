<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'item' => 'cut',
                'memo' => 'detail of cut',
                'price' => 6000,
            ],
            [
                'item' => 'color',
                'memo' => 'detail of color',
                'price' => 8000,
            ],
            [
                'item' => 'perm(including cut)',
                'memo' => 'detail of perm',
                'price' => 13000,
            ],
        ]);
    }
}
