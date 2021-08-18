<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name' => 'Shoes Composer',
                'desc' => 'Fusce aliquet sed tellus ut ultricies. Donec ac tristique lectus. Sed in sagittis metus. Donec vitae auctor enim. Suspendisse lobortis tortor sit amet lacus egestas ullamcorper.',
            ],
            [
                'name' => 'T-Shirt',
                'desc' => 'SOENG SOUY Is a free online learning program that introduces methods and how to coding websites from the limit First, to the highest level. There are websites such as HTML, CSS, Javascript, PHP, Framework Laravel',
            ],

        ]);
    }
}
