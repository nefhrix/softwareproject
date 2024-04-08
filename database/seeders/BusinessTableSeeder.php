<?php
namespace Database\Seeders;
use App\Models\Business;
use App\Models\Product;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Business::factory(1)->create();
        Product::factory(1)->create();
    }
}
