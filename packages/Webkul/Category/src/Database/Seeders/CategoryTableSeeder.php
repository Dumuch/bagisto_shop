<?php

namespace Webkul\Category\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

/*
 * Category table seeder.
 *
 * Command: php artisan db:seed --class=Webkul\\Category\\Database\\Seeders\\CategoryTableSeeder
 */

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('category_translations')->delete();

        $now = Carbon::now();
        $faker = Factory::create();

        for ($i = 2; $i < 50; $i++) {
            $r = $i + 1;
            DB::table('categories')->insert([
                [
                    'id' => $i,
                    'position' => '1',
                    'image' => NULL,
                    'status' => '1',
                    '_lft' => $i,
                    '_rgt' => $r,
                    'parent_id' => NULL,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            ]);

            DB::table('category_translations')->insert([
                [
                    'name' => $faker->title,
                    'slug' => $faker->slug,
                    'description' => $faker->text(),
                    'meta_title' => '',
                    'meta_description' => '',
                    'meta_keywords' => '',
                    'category_id' => $i,
                    'locale' => 'en',
                ]
            ]);
        }


    }
}
