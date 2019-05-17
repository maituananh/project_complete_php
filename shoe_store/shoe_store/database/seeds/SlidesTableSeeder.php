<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('slides')->insert(
        [
            [
            'name' => 'image1',
            'image' => 'banner1.jpg',
            'describe' => 'slide1',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image2',
            'image' => 'banner2.jpg',
            'describe' => 'slide2',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image3',
            'image' => 'banner3.jpg',
            'describe' => 'slide3',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image4',
            'image' => 'banner4.jpg',
            'describe' => 'slide4',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image5',
            'image' => 'banner5.jpg',
            'describe' => 'slide5',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image6',
            'image' => 'banner6.jpg',
            'describe' => 'slide6',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image7',
            'image' => 'banner7.jpg',
            'describe' => 'slide7',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image8',
            'image' => 'banner8.jpg',
            'describe' => 'slide8',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image9',
            'image' => 'banner9.jpg',
            'describe' => 'slide9',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image10',
            'image' => 'banner10.jpg',
            'describe' => 'slide10',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ],
        [
            'name' => 'image11',
            'image' => 'banner11.jpg',
            'describe' => 'slide11',
            'updated_at' => $dt->toDateString(),
            'created_at' => $dt->toDateString()
        ]]);
    }
}