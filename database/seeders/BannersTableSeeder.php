<?php

namespace Database\Seeders;

use App\Models\Banners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'title' => 'Product 1',
                'content' => 'Content 1',
                'image_path' => 'Empty',
            ],
            [
                'title' => 'Product 2',
                'content' => 'Content 2',
                'image_path' => 'Empty',
            ],
            [
                'title' => 'Product 3',
                'content' => 'Content 3',
                'image_path' => 'Empty',
            ]
        ];
        foreach($banners as $key => $value){
            Banners::create($value);
        }
    }
}
