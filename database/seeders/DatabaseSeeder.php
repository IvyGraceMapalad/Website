<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        DB::table('tbl_home')->insert([
            'title' => 'Klassy Cafe',
            'p1' => 'THE BEST EXPERIENCE',
            'btn' => 'Make A Reservation'
        ]); 
        DB::table('tbl__about')->insert([
            'title'=>'About Us',
            'head'=>'We Leave A Delicious Memory For You ',
            'body'=>'You are allowed to use this template for commercial purposes.'
        ]);
        DB::table('tbl_menu')->insert([
            'title'=>'Our Menus',
            'head'=>'Our Selection cakes with quality taste',
            'desc'=>'Chocolate cake or chocolate gâteau is a cake flavored with melted chocolate, cocoa powder, or both.',
            'foodname'=>'Chocolate Cake'
        ]);
        DB::table('tbl_contact')->insert([
            'title' => 'Contact Us',
            'head'=> 'Here You Can Make A Reservation Or Just walkin to our cafe',
            'body'=>'For more information you can contact with us.',
            'email'=>'klassycafe12@gmail.com',
            'email1'=>'klassyCafeee@gmail.com',
            'emailTitle'=>'Emails',
            'btn1'=>'Make your Reservation',
            'number'=>'Phone Numbers',
            'table'=>'Table Reservation'
        ]);


     
    }
}
