<?php

namespace Webkul\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Category\Database\Seeders\ProductTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductTableSeeder::class);
    }
}
