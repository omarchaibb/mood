<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['NomCategorie' => 'Electronics', 'created_at' => now(), 'updated_at' => now()],
            ['NomCategorie' => 'Furniture', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
