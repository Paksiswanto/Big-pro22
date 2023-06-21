<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryType::create([
            'name' => 'Biaya',
        ]);
        CategoryType::create([
            'name' => 'Item',
        ]);
        CategoryType::create([
            'name' => 'Lainnya',
        ]);
        CategoryType::create([
            'name' => 'Pendapatan',
        ]);
        Category::create([
            'name' => 'Deposit',
            'category_type_id' => '4',
            'color' => '#efff00'
        ]);
        Category::create([
            'name' => 'Lainnya',
            'category_type_id' => '1',
            'color' => '#bcbcbc'
        ]);
        Category::create([
            'name' => 'Penjualan',
            'category_type_id' => '3',
            'color' => '#8fce00'
        ]);
        Category::create([
            'name' => 'Umum',
            'category_type_id' => '2',
            'color' => '#2986cc'
        ]);
    }
}
