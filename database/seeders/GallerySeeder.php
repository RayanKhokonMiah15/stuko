<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $gallery = [
            ['Nomor'=>'1','genre'=>'Nature','caption'=>'lorem ipsum cukimai wawa'],
            ['Nomor'=>'2','genre'=>'City','caption'=>'lorem ipsum cukimai wiwi'],
            ['Nomor'=>'3','genre'=>'Furniture','caption'=>'lorem ipsum cukimai wuwu'],
        ];
        DB::table('gallery')->insert($gallery);
    }
}
