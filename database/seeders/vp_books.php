<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vp_books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            [
                'title'=>"Giao an",
                'author'=>"Mr.Dinh",
                'numberpage'=>300,
                'category_id'=>1,
                'public_date'=>'2021/1/1',
                'price'=>1000000,
                'image'=>'book-image/book3.jpg',
                "description"=>'Sach hay',
            ],
            [
                'title'=>"Tu truyen",
                'author'=>"Mr.Bao",
                'numberpage'=>300,
                'category_id'=>1,
                'public_date'=>'2021/1/1',
                'price'=>1000000,
                'image'=>'book-image/book3.jpg',
                'description'=>'Sach hay',
            ],
            [
                'title'=>"Truyen cuoi",
                'author'=>"Mr.Haha",
                'numberpage'=>300,
                'category_id'=>1,
                'public_date'=>'2021/1/1',
                'price'=>1000000,
                'image'=>'book-image/book3.jpg',
                'description'=>'Sach hay',
            ]
        ]);
        
    }
}
