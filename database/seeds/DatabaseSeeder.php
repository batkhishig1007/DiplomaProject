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
        
        // $c1 = DB::table('categories')->insert(['category_name' =>"Онцлох мэдээ"]);
        // $c2 = DB::table('categories')->insert(['category_name' =>"Цаг үеийн мэдээ"]);
        // $c3 = DB::table('categories')->insert(['category_name' =>"Санал гомдлын хариу"]);
        // $c4 = DB::table('categories')->insert(['category_name' =>"Шуурхай зөвлөгөөн"]);
        // DB::table('categories')->insert(['category_name' =>"мэдээний ангилал 5"]);

        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "3-7"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "4-7"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "7-7"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "8-4"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "8А-4"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "9-4"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "10-4"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "18-5"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "20-6"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "21-6"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "22-5"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "23-5"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "28-10"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "29-6"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "30-10"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "31-8"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Саарал", 'apartment_number'=> "33-8"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "1-1"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "2-1"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "7-1"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "10-1"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "11-2"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "12-2"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "13-2"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "16-2"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "17-2"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нэхмэл", 'apartment_number'=> "18-2"]);
        // DB::table('apartments')->insert(['apartment_name' => "Эко", 'apartment_number'=> "12-2"]);
        // DB::table('apartments')->insert(['apartment_name' => "Эко", 'apartment_number'=> "17-2"]);
        // DB::table('apartments')->insert(['apartment_name' =>"То Ван", 'apartment_number'=> "20-4"]);
        // DB::table('apartments')->insert(['apartment_name' =>"То Ван", 'apartment_number'=> "24-2"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Гурван өндөр", 'apartment_number'=> "12А-3"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Гурван өндөр", 'apartment_number'=> "12Б-3"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Гурван өндөр", 'apartment_number'=> "12В-3"]);
        // DB::table('apartments')->insert(['apartment_name' =>"ЧӨЧ", 'apartment_number'=> "5-1"]);
        // DB::table('apartments')->insert(['apartment_name' =>"ЧӨЧ", 'apartment_number'=> "6А-1"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нутгийн буян", 'apartment_number'=> "14-9"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нутгийн буян", 'apartment_number'=> "37А-9"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Нутгийн буян", 'apartment_number'=> "37Б-9"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Ягаан", 'apartment_number'=> "35А-11"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Ягаан", 'apartment_number'=> "35Б-11"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Гааль", 'apartment_number'=> "17-10"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Дундгол", 'apartment_number'=> "28-10"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Дундгол", 'apartment_number'=> "29-8"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Дундгол", 'apartment_number'=> "30-8"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Дундгол", 'apartment_number'=> "31-8"]);
        // DB::table('apartments')->insert(['apartment_name' =>"Дундгол", 'apartment_number'=> "32А-8"]);

        // DB::table('posts')->insert(['title' =>"ВАКЦИНЖУУЛАЛТЫН ЦЭГ", 'short_description'=> "ВАКЦИНЖУУЛАЛТЫН ЦЭГ", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"АЖ АХУЙН НЭГЖ, БАЙГУУЛЛАГЫН тооллого", 'short_description'=> "АЖ АХУЙН НЭГЖ, БАЙГУУЛЛАГЫН тооллого.", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"Зорилтот бүлгийн иргэдийн 50 хувь нэмэлт тунд хамрагдвал бүх төрлийн хичээл, сургалтын үйл ажиллагааг бүрэн нээнэ", 'short_description'=> "Зорилтот бүлгийн иргэдийн 50 хувь нэмэлт тунд хамрагдвал бүх төрлийн хичээл, сургалтын үйл ажиллагааг бүрэн нээнэ.", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"Нийслэлийн иргэд бизнес эрхлэх цахим сургалтад хамрагдах боломжтой боллоо", 'short_description'=> "Нийслэлийн иргэд бизнес эрхлэх цахим сургалтад хамрагдах боломжтой боллоо.", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"Нийслэлийн жижиг, дунд үйлдвэр, үйлчилгээ эрхлэгчид иж бүрэн тохижилттой дундын оффистой болно", 'short_description'=> "Нийслэлийн жижиг, дунд үйлдвэр, үйлчилгээ эрхлэгчид иж бүрэн тохижилттой дундын оффистой болно.", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"“Шар дарцаг” аян Хан-Уул дүүрэгт үргэлжилж байна", 'short_description'=> "Шар дарцаг” аян Хан-Уул дүүрэгт үргэлжилж байна.", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"“Өвлийн идэш” арга хэмжээ болно", 'short_description'=> "“Өвлийн идэш” арга хэмжээ болно.", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"Хан-Уул дүүрэгт хуучин хувцас, гутлаа зорилтот бүлгийн иргэдэд хандивлах 3 цэг ажиллуулж байна", 'short_description'=> "Хан-Уул дүүрэгт хуучин хувцас, гутлаа зорилтот бүлгийн иргэдэд хандивлах 3 цэг ажиллуулж байна.", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"“Жудо бөхийн шигшээ баг”-ийн тамирчид “Алтан медал”-ийн эзэд боллоо", 'short_description'=> "Хан-Уул дүүргийн Засаг даргын дэргэдэх “Жудо бөхийн шигшээ баг”-ийн тамирчид “Алтан медал”-ийн эзэд боллоо.", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"Нийслэлийн  Газар зохион байгуулалтын ерөнхий төлөвлөгөөг шинэчлэн боловсруулж байна", 'short_description'=> "Нийслэлийн  Газар зохион байгуулалтын ерөнхий төлөвлөгөөг шинэчлэн боловсруулж байна.", 'category_id'=> $c1]);
        // DB::table('posts')->insert(['title' =>"Зарим дүүргийн хороодыг хувааж, шинээр зохион байгуулах санал гаргав", 'short_description'=> "Зарим дүүргийн хороодыг хувааж, шинээр зохион байгуулах санал гаргав.", 'category_id'=> $c2]);
        // DB::table('posts')->insert(['title' =>" “Асуудал Шийдэл” илтгэл, ур чадварын уралдаан", 'short_description'=> "Асуудал Шийдэл” илтгэл, ур чадварын уралдаан.", 'category_id'=> $c2]);
        // DB::table('posts')->insert(['title' =>"“Хан-Уул лиг” сагсан бөмбөгийн тэмцээн", 'short_description'=> "Хан-Уул дүүргийн иргэдийн төлөөлөгчдийн хурлын нэрэмжит “Хан-Уул лиг” сагсан бөмбөгийн тэмцээн.", 'category_id'=> $c2]);
        // DB::table('posts')->insert(['title' =>"Хүүхдийг зам, тээврийн осолд өртөхөөс урьдчилан сэргийлэх чиглэлээр “ШАР ДАРЦАГ” АЯН үргэлжилж байна", 'short_description'=> "Хүүхдийг зам, тээврийн осолд өртөхөөс урьдчилан сэргийлэх чиглэлээр “ШАР ДАРЦАГ” АЯН үргэлжилж байна.", 'category_id'=> $c2]);
        // DB::table('posts')->insert(['title' =>"Нийгмийн халамжийн тэтгэвэр, тэтгэмж, хөнгөлөлт, тусламжийн 11 дүгээр сарын олголтын хуваарь", 'short_description'=> "Нийгмийн халамжийн тэтгэвэр, тэтгэмж, хөнгөлөлт, тусламжийн 11 дүгээр сарын олголтын хуваарь", 'category_id'=> $c2]);
        // DB::table('posts')->insert(['title' =>"Шар түвшинд шилжихийн тулд нэмэлт тунд хамрагдах хэрэгтэйг онцлов", 'short_description'=> "Шар түвшинд шилжихийн тулд нэмэлт тунд хамрагдах хэрэгтэйг онцлов.", 'category_id'=> $c2]);
        // DB::table('posts')->insert(['title' =>"21 хороодын хөгжлийн нийгмийн ажилтнуудад сургалт зохион байгууллаа", 'short_description'=> "21 хороодын хөгжлийн нийгмийн ажилтнуудад сургалт зохион байгууллаа.", 'category_id'=> $c2]);
        // DB::table('posts')->insert(['title' =>"Нэмэлт тунд хамрагдсанаар халдварын тархалт буурч байна", 'short_description'=> "ЭНэмэлт тунд хамрагдсанаар халдварын тархалт буурч байна.", 'category_id'=> $c2]);
        // DB::table('posts')->insert(['title' =>"Сургууль, цэцэрлэгүүдэд шаардлагатай сургалтын хэрэглэгдэхүүнүүдийг хүлээлгэн өглөө", 'short_description'=> "Хан-Уул дүүргийн Засаг дарга Ж.Алдаржавхлан дүүргийн сургууль, цэцэрлэгүүдэд шаардлагатай сургалтын хэрэглэгдэхүүнүүдийг хүлээлгэн өглөө.", 'category_id'=> $c2]);
        // DB::table('posts')->insert(['title' =>"Хан-Уул дүүргийн 15 хороонд цэцэрлэгийн шав тавилаа", 'short_description'=> "Хан-Уул дүүргийн 15 хороонд цэцэрлэгийн шав тавилаа.", 'category_id'=> $c3]);
        // DB::table('posts')->insert(['title' =>"Монгол Улсын өсвөр үеийн жудо бөхийн аварга шалгаруулах тэмцээн", 'short_description'=> "Монгол Улсын өсвөр үеийн жудо бөхийн аварга шалгаруулах тэмцээн 2021 оны11 сарын 06- 08-ны өдрүүдэд зохион байгуулагдаж өнгөрлөө.", 'category_id'=> $c3]);
        // DB::table('posts')->insert(['title' =>"Хөгжлийн бэрхшээлтэй иргэдэд үзүүлэх үйлчилгээний хүртээмжийг нэмэгдүүлнэ", 'short_description'=> "Хөгжлийн бэрхшээлтэй иргэдэд үзүүлэх үйлчилгээний хүртээмжийг нэмэгдүүлнэ.", 'category_id'=> $c3]);
        // DB::table('posts')->insert(['title' =>"Угаарын хий мэдрэгчийн зай хураагуурыг сольж эрсдэлээс сэргийлээрэй", 'short_description'=> "Угаарын хий мэдрэгчийн зай хураагуурыг сольж эрсдэлээс сэргийлээрэй.", 'category_id'=> $c3]);
        // DB::table('posts')->insert(['title' =>"Монгол Улсын өсвөр үеийн жудо бөхийн аварга шалгаруулах тэмцээн", 'short_description'=> "онгол Улсын өсвөр үеийн жудо бөхийн аварга шалгаруулах тэмцээн 2021 оны11 сарын 06- 08-ны өдрүүдэд зохион байгуулагдаж өнгөрлөө.", 'category_id'=> $c3]);
        // DB::table('posts')->insert(['title' =>"Төрийн архивын улсын үзлэг эхэллээ", 'short_description'=> "Төрийн архивын улсын үзлэг эхэллээ.", 'category_id'=> $c3]);
        // DB::table('posts')->insert(['title' =>"Хувиараа хөдөлмөр эрхлэгч тооллогодоо идэвхтэй хамрагдаарай", 'short_description'=> "Хувиараа хөдөлмөр эрхлэгч тооллогодоо идэвхтэй хамрагдаарай.", 'category_id'=> $c3]);
        // DB::table('posts')->insert(['title' =>"“Шар дарцаг” аянд нэгдэхийг уриалж байна", 'short_description'=> "Шар дарцаг” аянд нэгдэхийг уриалж байна.", 'category_id'=> $c3]);
        // DB::table('posts')->insert(['title' =>"20 гаруй иргэдэд эмчилгээнд шаардагдах мөнгөн тусламж үзүүлээд байна", 'short_description'=> "Засаг дарга Ж.Алдаржавхлангийн санаачлагаар ХУД-ийн ИРГЭДИЙН ХУРЛЫН ТӨЛӨӨЛӨГЧИД хамтран ХОРТ ХАВДАРТАЙ ХҮМҮҮСТ ТУСЛАХ САН байгуулж, дүүргийнхээ 20 гаруй иргэдэд эмчилгээнд шаардагдах мөнгөн тусламж үзүүлээд байна", 'category_id'=> $c3]);
        // DB::table('posts')->insert(['title' =>"Хууль зүй, дотоод хэргийн сайд Х.Нямбаатар Хан-Уул дүүрэг дэх Цагдаагийн газарт ажиллалаа", 'short_description'=> "Хууль зүй, дотоод хэргийн сайд Х.Нямбаатар Хан-Уул дүүрэг дэх Цагдаагийн газарт ажиллалаа.", 'category_id'=> $c4]);
        // DB::table('posts')->insert(['title' =>"АЖ АХУЙН НЭГЖ БАЙГУУЛЛАГЫН ТООЛЛОГОДОО ИДЭВХТЭЙ ХАМРАГДААРАЙ.", 'short_description'=> "АЖ АХУЙН НЭГЖ БАЙГУУЛЛАГЫН ТООЛЛОГОДОО ИДЭВХТЭЙ ХАМРАГДААРАЙ.", 'category_id'=> $c4]);
        // DB::table('posts')->insert(['title' =>"Нийслэлийн хэмжээнд 2000 тонн тусгай бодис, 500 тонн давс нөөцөлжээ", 'short_description'=> "Нийслэлийн хэмжээнд 2000 тонн тусгай бодис, 500 тонн давс нөөцөлжээ.", 'category_id'=> $c4]);
        // DB::table('posts')->insert(['title' =>"Үйлчилгээний салбарынхан III тундаа хамрагдаж эхэллээ", 'short_description'=> "Үйлчилгээний салбарынхан III тундаа хамрагдаж эхэллээ.", 'category_id'=> $c4]);
        // DB::table('posts')->insert(['title' =>"Угаарын хийн дуудлага буурчээ", 'short_description'=> "Угаарын хийн дуудлага буурчээ.", 'category_id'=> $c4]);
        // DB::table('posts')->insert(['title' =>"ХАН-УУЛ ДҮҮРГИЙН АЖ, АХУЙН НЭГЖ БАЙГУУЛЛАГУУДТАЙ ХАРИУЦЛАГЫН ГЭРЭЭ БАЙГУУЛЛАА", 'short_description'=> "ХАН-УУЛ ДҮҮРГИЙН АЖ, АХУЙН НЭГЖ БАЙГУУЛЛАГУУДТАЙ ХАРИУЦЛАГЫН ГЭРЭЭ БАЙГУУЛЛАА.", 'category_id'=> $c4]);
        // DB::table('posts')->insert(['title' =>"Хан-Уул дүүргийн Онцгой комиссын дарга Ж.Алдаржавхлан", 'short_description'=> "Хан-Уул дүүргийн Онцгой комиссын дарга Ж.Алдаржавхлан.", 'category_id'=> $c4]);
        // DB::table('posts')->insert(['title' =>"Соёлын бүтээгдэхүүн үйлдвэрлэгчид анхдугаар зөвлөгөөнөө дүгнэлээ", 'short_description'=> "“Соёлын бүтээгдэхүүн үйлдвэрлэгчид анхдугаар зөвлөгөөнөө дүгнэлээ", 'category_id'=> $c4]);
        // DB::table('posts')->insert(['title' =>"Тамирчид дархлаа сэргээх нэмэлт III тунд хамрагдлаа", 'short_description'=> "Тамирчид дархлаа сэргээх нэмэлт III тунд хамрагдлаа.", 'category_id'=> $c4]);


        // DB::table('users')->insert([
        //     'username' =>"admin",
        //     'password' => Hash::make('p@ssw0rd'),
        //     'firstname' => 'Batkhishig',
        //     'lastname' => 'Danaasuren',
        //     'rd' => 'УК99100712',
        //     'email' => 'd.batkhishig1007@gmail.com',
        //     'phone' => '+97699288220',
        //     'birthday' => '1999/10/07',
        //     'gender' => 'male',
        //     'admin_type' => 'admin',
        //     'apartment_id' => '22',
        //     'address' => "KHUD 2nd section 22-18",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"baigal",
        //     'password' => Hash::make('p@ssw0rd1'),
        //     'firstname' => 'Baigali',
        //     'lastname' => 'Tab',
        //     'rd' => 'UK97123101',
        //     'email' => 'baigal@gmail.com',
        //     'phone' => '+97696057700',
        //     'birthday' => '1999/10/05',
        //     'gender' => 'female',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '23',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"tseren",
        //     'password' => Hash::make('p@ssw0rd2'),
        //     'firstname' => 'Tserennadmid',
        //     'lastname' => 'Jrod',
        //     'rd' => 'UK97123102',
        //     'email' => 'tseren@gmail.com',
        //     'phone' => '+97694742804',
        //     'birthday' => '1999/10/06',
        //     'gender' => 'female',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '18',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"amar",
        //     'password' => Hash::make('p@ssw0rd3'),
        //     'firstname' => 'Amarjargal',
        //     'lastname' => 'Aglut',
        //     'rd' => 'UK97123103',
        //     'email' => 'amar@gmail.com',
        //     'phone' => '+97691373800',
        //     'birthday' => '1999/10/08',
        //     'gender' => 'male',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '21',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"bayrmaa",
        //     'password' => Hash::make('p@ssw0rd4'),
        //     'firstname' => 'Bayrmaa',
        //     'lastname' => 'Khus',
        //     'rd' => 'UK97123104',
        //     'email' => 'bayrmaa@gmail.com',
        //     'phone' => '+97699916781',
        //     'birthday' => '1999/10/09',
        //     'gender' => 'female',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '28',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"nym",
        //     'password' => Hash::make('p@ssw0rd5'),
        //     'firstname' => 'Nymtsetseg',
        //     'lastname' => 'Gayukh',
        //     'rd' => 'UK97123105',
        //     'email' => 'nym@gmail.com',
        //     'phone' => '+97699285790',
        //     'birthday' => '1999/10/10',
        //     'gender' => 'female',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '30',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"ynjin",
        //     'password' => Hash::make('p@ssw0rd6'),
        //     'firstname' => 'Ynjindulam',
        //     'lastname' => 'Oidol',
        //     'rd' => 'UK97123106',
        //     'email' => 'ynjin@gmail.com',
        //     'phone' => '+97699262131',
        //     'birthday' => '1999/10/11',
        //     'gender' => 'female',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '31',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"odon",
        //     'password' => Hash::make('p@ssw0rd7'),
        //     'firstname' => 'Odonchimeg',
        //     'lastname' => 'Gemich',
        //     'rd' => 'UK97123107',
        //     'email' => 'odon@gmail.com',
        //     'phone' => '+9799909257',
        //     'birthday' => '1999/10/12',
        //     'gender' => 'female',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '33',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"erdene",
        //     'password' => Hash::make('p@ssw0rd8'),
        //     'firstname' => 'Erdenebolor',
        //     'lastname' => 'Malud',
        //     'rd' => 'UK97123108',
        //     'email' => 'erdene@gmail.com',
        //     'phone' => '+97680132329',
        //     'birthday' => '1999/10/13',
        //     'gender' => 'female',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '37',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"zaya",
        //     'password' => Hash::make('p@ssw0rd9'),
        //     'firstname' => 'Amarzaya',
        //     'lastname' => 'Getsets',
        //     'rd' => 'UK97123109',
        //     'email' => 'zaya@gmail.com',
        //     'phone' => '+97699299193',
        //     'birthday' => '1999/10/14',
        //     'gender' => 'female',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '10',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"altan",
        //     'password' => Hash::make('p@ssw0rd10'),
        //     'firstname' => 'Altan-Od',
        //     'lastname' => 'Smij',
        //     'rd' => 'UK97123110',
        //     'email' => 'altan@gmail.com',
        //     'phone' => '+97689454589',
        //     'birthday' => '1999/10/15',
        //     'gender' => 'male',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '9',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

        // DB::table('users')->insert([
        //     'username' =>"badam",
        //     'password' => Hash::make('p@ssw0rd11'),
        //     'firstname' => 'Badamkhorloo',
        //     'lastname' => 'Do-Natla',
        //     'rd' => 'UK97123111',
        //     'email' => 'badam@gmail.com',
        //     'phone' => '+97689288225',
        //     'birthday' => '1999/10/16',
        //     'gender' => 'female',
        //     'admin_type' => 'operator',
        //     'apartment_id' => '28',
        //     'address' => "KHUD 2nd section",
        //     'is_active' => true,
        // ]);

    }
    }