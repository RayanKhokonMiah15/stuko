<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $genre = [
            ['genre'=>'nature','deskripsi_genre'=>'keindahan alam'],
            ['genre'=>'futuristic','deskripsi_genre'=>'ilustrasi masa depan'],
            ['genre'=>'ocean','deskripsi_genre'=>'keindahan bawah laut']
        ];
        DB::table('genre')->insert($genre);
    }
}
