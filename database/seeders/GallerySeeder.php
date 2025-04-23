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
            ['nama_foto'=>'orang kotak','tempat'=>'Nature','caption'=>'lorem ipsum cukimai wawa'],
            ['nama_foto'=>'orang kotik','tempat'=>'City','caption'=>'lorem ipsum cukimai wiwi'],
            ['nama_foto'=>'orang kotok','tempat'=>'Furniture','caption'=>'lorem ipsum cukimai wuwu'],
        ];
        DB::table('gallery')->insert($gallery);
    }
}
