<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $c1 = DB::table('categories')->insert(['category_name' =>"мэдээний ангилал 1"]);
        DB::table('categories')->insert(['category_name' =>"мэдээний ангилал 2"]);
        DB::table('categories')->insert(['category_name' =>"мэдээний ангилал 3"]);
        DB::table('categories')->insert(['category_name' =>"мэдээний ангилал 4"]);
        DB::table('categories')->insert(['category_name' =>"мэдээний ангилал 5"]);

        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 1", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 2", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 3", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 4", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 5", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 6", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 7", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 8", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 9", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 10", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Мэдээний гарчиг", 'short_description'=> "Мэдээний товч тайлбар", 'category_id'=> $c1]);


        // DB::table('users')->insert([
        //     'username' =>"demo",
        //     'password' => Hash::make('p@ssw0rd'),
        //     'firstname' => 'user',
        //     'lastname' => 'dan',
        //     'rd' => 'UK97123101',
        //     'email' => 'demo@gmail.com',
        //     'phone' => '+97698786545',
        //     'birthday' => '1999/10/05',
        //     'gender' => 'male',
        //     'admin_type' => 'admin',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);
    }
}