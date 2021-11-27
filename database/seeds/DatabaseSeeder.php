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
        
        $c1 = DB::table('categories')->insert(['category_name' =>"Онцлох мэдээ"]);
        DB::table('categories')->insert(['category_name' =>"Цаг үеийн мэдээ"]);
        DB::table('categories')->insert(['category_name' =>"Санал гомдлын хариу"]);
        DB::table('categories')->insert(['category_name' =>"Шуурхай зөвлөгөөн"]);
        DB::table('categories')->insert(['category_name' =>"мэдээний ангилал 5"]);

        DB::table('apartments')->insert(['apartment_name' =>"Саарлын", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Ягаан", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл шар", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Александра", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Хийморь 19", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Цагаан 7", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Нутгийн буян", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 8", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 9", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('apartments')->insert(['apartment_name' =>"Байрны нэр 10", 'apartment_number'=> "Байрны дугаар 1"]);
        DB::table('posts')->insert(['title' =>"ВАКЦИНЖУУЛАЛТЫН ЦЭГ", 'short_description'=> "Бизнесийн салбарт үйл ажиллагаа явуулж буй аж ахуйн нэгжүүд, хувиараа хөдөлмөр эрхлэгч та бүхнийг 5 жил тутамд явагддаг улсын тооллогодоо идэвхтэй хамрагдахыг уриалж байна.
        Та https://toollogo.1212.mn/ цахим хуудсанд хандан тооллогодоо хамрагдана уу.
       Энэ нь таны заавал биелүүлэх үүрэг мөн.
       #ҮндэснийСтатистикийнХороо #Статистик #NSO #Statistics #Тооллого2021 #ААНБТооллого2021", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"АЖ АХУЙН НЭГЖ, БАЙГУУЛЛАГЫН тооллогын хугацаа дуусахад 6 хоног үлдлээ", 'short_description'=> "Бизнесийн салбарт үйл ажиллагаа явуулж буй аж ахуйн нэгжүүд, хувиараа хөдөлмөр эрхлэгч та бүхнийг 5 жил тутамд явагддаг улсын тооллогодоо идэвхтэй хамрагдахыг уриалж байна.
        Та https://toollogo.1212.mn/ цахим хуудсанд хандан тооллогодоо хамрагдана уу.
       Энэ нь таны заавал биелүүлэх үүрэг мөн.
       #ҮндэснийСтатистикийнХороо #Статистик #NSO #Statistics #Тооллого2021 #ААНБТооллого2021", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Зорилтот бүлгийн иргэдийн 50 хувь нэмэлт тунд хамрагдвал бүх төрлийн хичээл, сургалтын үйл ажиллагааг бүрэн нээнэ", 'short_description'=> "Коронавируст халдварын тохиолдол өмнөх долоо хоногтоо харьцуулахад 26.2 хувиар буурсан байна. Өвчлөлийн тохиолдол буурч буй нь нэмэлт тунгийн дархлаажуулалттай холбоотой гэж Эрүүл мэндийн сайд хэллээ.", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Нийслэлийн иргэд бизнес эрхлэх цахим сургалтад хамрагдах боломжтой боллоо", 'short_description'=> "Жижиг бизнес эрхлэх цахим сургалтууд нь бизнесээ хэрхэн эхлүүлэх арга зам, амжилттай удирдан явуулах аргачлалыг нэг бүрчлэн заах бөгөөд нийслэлийн иргэдэд үнэ төлбөргүй, нээлттэй хүрэх юм. Сургалтыг бүрэн дүүргэсэн иргэдэд НЗДТГ, Олон улсын шилжилт хөдөлгөөний байгууллагаас сертификат олгоно.", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"Нийслэлийн жижиг, дунд үйлдвэр, үйлчилгээ эрхлэгчид иж бүрэн тохижилттой дундын оффистой болно", 'short_description'=> "Нийслэлийн Жижиг, дунд үйлдвэр, үйлчилгээг дэмжих төв НӨҮГ Монголын үндэсний их сургууль /МҮИС/-тай хамтран ажиллах санамж бичиг байгууллаа. Тус санамж бичгийн зорилго нь МҮИС-ийн дэргэд инновацыг хөгжүүлэх, нэвтрүүлэх, гарааны бизнесийг дэмжих, жижиг, дунд үйлдвэр, үйлчилгээ эрхлэгчдийг хөнгөлөлттэй нөхцөлөөр ажлын байраар хангах, үйлдвэр эрхлэгчдийг бойжуулах, төр хувийн хэвшлийн хамтын ажиллагааг хөгжүүлэхэд чиглэжээ.", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"“Шар дарцаг” аян Хан-Уул дүүрэгт үргэлжилж байна", 'short_description'=> "Нийслэлийн Засаг даргын захирамжаар замын хөдөлгөөнд оролцогчийн аюулгүй байдлыг хангах, хүүхдийг гэмт хэрэг, зөрчилд өртөхөөс урьдчилан сэргийлэх, замын хөдөлгөөний аюулгүй байдлын хууль, дүрмийг сурталчлах, зөв дадал хэвшлийг бий болгох зорилгоор “Шар дарцаг” аяныг нийслэлийн хэмжээнд нэг сарын хугацаатайгаар өрнүүлж байна.", 'category_id'=> $c1]);
        DB::table('posts')->insert(['title' =>"“Өвлийн идэш” арга хэмжээ болно", 'short_description'=> "ХХААХҮЯ, НЗДТГ, Улаанбаатар хотын Захирагчийн ажлын алба, холбогдох аймгийн Засаг дарга болон аймаг, нийслэлийн Хүнс, хөдөө аж ахуйн газар хамтран нийслэлийн хүн амын өвлийн хэрэгцээнд зориулан “Өвлийн идэш” арга хэмжээ зохион байгуулна. Тус арга хэмжээ арваннэгдүгээр сарын 25-наас арванхоёрдугаар сарын 2-ны өдрийг дуустал Төв цэнгэлдэх хүрээлэнд болох юм.", 'category_id'=> $c1]);
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


        DB::table('users')->insert([
            'username' =>"admin",
            'password' => Hash::make('p@ssw0rd'),
            'firstname' => 'Batkhishig',
            'lastname' => 'Danaasuren',
            'rd' => 'УК99100712',
            'email' => 'd.batkhishig1007@gmail.com',
            'phone' => '+97699288220',
            'birthday' => '1999/10/07',
            'gender' => 'male',
            'admin_type' => 'admin',
            'apartment_id' => 'Саарлын 22',
            'address' => "KHUD 2nd section 22-18",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"bat",
            'password' => Hash::make('p@ssw0rd1'),
            'firstname' => 'Bat',
            'lastname' => 'Tab',
            'rd' => 'UK97123101',
            'email' => 'bat@gmail.com',
            'phone' => '+9769928821',
            'birthday' => '1999/10/05',
            'gender' => 'male',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 23',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"dorj",
            'password' => Hash::make('p@ssw0rd2'),
            'firstname' => 'Dorj',
            'lastname' => 'Jrod',
            'rd' => 'UK97123102',
            'email' => 'dorj@gmail.com',
            'phone' => '+9769928822',
            'birthday' => '1999/10/06',
            'gender' => 'male',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 18',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"tulga",
            'password' => Hash::make('p@ssw0rd3'),
            'firstname' => 'Tulga',
            'lastname' => 'Aglut',
            'rd' => 'UK97123103',
            'email' => 'tulga@gmail.com',
            'phone' => '+9769928823',
            'birthday' => '1999/10/08',
            'gender' => 'male',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 21',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"sukh",
            'password' => Hash::make('p@ssw0rd4'),
            'firstname' => 'Sukh',
            'lastname' => 'Khus',
            'rd' => 'UK97123104',
            'email' => 'sukh@gmail.com',
            'phone' => '+9769928824',
            'birthday' => '1999/10/09',
            'gender' => 'male',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 28',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"khuyag",
            'password' => Hash::make('p@ssw0rd5'),
            'firstname' => 'Khuyag',
            'lastname' => 'Gayukh',
            'rd' => 'UK97123105',
            'email' => 'khuyag@gmail.com',
            'phone' => '+9769928825',
            'birthday' => '1999/10/10',
            'gender' => 'male',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 30',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"lodoi",
            'password' => Hash::make('p@ssw0rd6'),
            'firstname' => 'Lodoi',
            'lastname' => 'Oidol',
            'rd' => 'UK97123106',
            'email' => 'lodoi@gmail.com',
            'phone' => '+9769928826',
            'birthday' => '1999/10/11',
            'gender' => 'male',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 31',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"chimeg",
            'password' => Hash::make('p@ssw0rd7'),
            'firstname' => 'Chimeg',
            'lastname' => 'Gemich',
            'rd' => 'UK97123107',
            'email' => 'chimeg@gmail.com',
            'phone' => '+9769928827',
            'birthday' => '1999/10/12',
            'gender' => 'female',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 33',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"dulam",
            'password' => Hash::make('p@ssw0rd8'),
            'firstname' => 'Dulam',
            'lastname' => 'Malud',
            'rd' => 'UK97123108',
            'email' => 'dulam@gmail.com',
            'phone' => '+9769928828',
            'birthday' => '1999/10/13',
            'gender' => 'female',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 37',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"tsetseg",
            'password' => Hash::make('p@ssw0rd9'),
            'firstname' => 'Tsetseg',
            'lastname' => 'Getsets',
            'rd' => 'UK97123109',
            'email' => 'bat@gmail.com',
            'phone' => '+9769928829',
            'birthday' => '1999/10/14',
            'gender' => 'female',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 10',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'username' =>"jims",
            'password' => Hash::make('p@ssw0rd10'),
            'firstname' => 'Jims',
            'lastname' => 'Smij',
            'rd' => 'UK97123110',
            'email' => 'jims@gmail.com',
            'phone' => '+9769928830',
            'birthday' => '1999/10/15',
            'gender' => 'female',
            'admin_type' => 'operator',
            'apartment_id' => 'Саарлын 9',
            'address' => "KHUD 2nd section",
            'is_active' => true,
        ]);
    }
}