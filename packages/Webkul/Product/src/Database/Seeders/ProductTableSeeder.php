<?php

namespace Webkul\Product\Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/*
 * Product table seeder.
 *
 * Command: php artisan db:seed --class=Webkul\\Product\\Database\\Seeders\\ProductTableSeeder
 */

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->delete();
        DB::table('product_attribute_values')->delete();
        DB::table('product_flat')->delete();
        DB::table('product_categories')->delete();
        DB::table('product_inventories')->delete();
        $now = Carbon::now();
        $faker = Factory::create();

        $arrProducts = [];
        $arrProductInv = [];
        $arrProductCat = [];
        $arrProductAttr = [];
        $arrProductFlat = [];

        for ($i = 4; $i < 700; $i++) {
            print $i . PHP_EOL;
            $sku = $faker->uuid;
            $name = $faker->name;
            $url = Str::slug($name);
            $new = $faker->boolean;
            $featured = $faker->boolean;
            $visible = $faker->boolean;
            $prev_text = $faker->text();
            $desc = $faker->realText();
            $price = $faker->randomFloat(null, 5, 10000);
            $qty = $faker->randomNumber();

            $arrProducts[] = [
                'id' => $i,
                'sku' => $sku,
                'type' => 'simple',
                'parent_id' => NULL,
                'created_at' => $now,
                'updated_at' => $now,
                'attribute_family_id' => 1,
                'additional' => null,
            ];


            $arrProductInv[] = [
                'id' => $i,
                'qty' => $qty,
                'product_id' => $i,
                'inventory_source_id' => 1,
                'vendor_id' => 1
            ];


            $arrProductCat[] =
                [
                    'product_id' => $i,
                    'category_id' => $faker->numberBetween(2, 49)
                ];

            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 1,
                    'text_value' => $sku,
                    'boolean_value' => null,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 2,
                    'text_value' => $name,
                    'boolean_value' => null,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 3,
                    'text_value' => $url,
                    'boolean_value' => null,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 5,
                    'text_value' => null,
                    'boolean_value' => $new,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 6,
                    'text_value' => null,
                    'boolean_value' => $featured,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 7,
                    'text_value' => null,
                    'boolean_value' => $visible,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 8,
                    'text_value' => null,
                    'boolean_value' => 1,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 9,
                    'text_value' => $prev_text,
                    'boolean_value' => null,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 10,
                    'text_value' => $desc,
                    'boolean_value' => null,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 11,
                    'text_value' => null,
                    'boolean_value' => null,
                    'float_value' => $price,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 22,
                    'text_value' => $qty,
                    'boolean_value' => null,
                    'float_value' => null,
                    'product_id' => $i,
                ];
            $arrProductAttr[] =
                [
                    'locale' => 'en',
                    'channel' => 'default',
                    'attribute_id' => 27,
                    'text_value' => null,
                    'boolean_value' => null,
                    'float_value' => null,
                    'product_id' => $i,
                ];



            $arrProductFlat[] =
                [
                    'sku' => $sku,
                    'name' => $name,
                    'description' => $desc,
                    'url_key' => $url,
                    'new' => $new,
                    'featured' => $featured,
                    'status' => 1,
                    'thumbnail' => null,
                    'price' => $price,
                    'cost' => $faker->randomFloat(null, 0, 1500),
                    'weight' => $faker->randomFloat(null, 10, 2000),
                    'color' => 1,
                    'color_label' => 'red',
                    'size' => 6,
                    'size_label' => 's',
                    'created_at' => $now,
                    'updated_at' => $now,
                    'locale' => 'en',
                    'channel' => 'default',
                    'product_id' => $i,
                    'parent_id' => null,
                    'visible_individually' => $visible,
                    'min_price' => $price,
                    'max_price' => $price,
                    'short_description' => $prev_text,
                    'width' => 0,
                    'height' => 0,
                    'depth' => null
                ];
        }

        DB::table('products')->insert($arrProducts);
        DB::table('product_inventories')->insert($arrProductInv);
        DB::table('product_categories')->insert($arrProductCat);
        DB::table('product_attribute_values')->insert($arrProductAttr);
        DB::table('product_flat')->insert($arrProductFlat);
    }
}