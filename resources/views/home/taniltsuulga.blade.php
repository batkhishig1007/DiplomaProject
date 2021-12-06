@extends('web.customer')

@section('content')
<section class="white">
    <div class="uk-container">
        <div uk-grid class="uk-margin-large-top uk-margin-large-bottom">
            <div class="uk-width-auto@m">
                <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                    <li><a href="#">Танилцуулга</a></li>
                    <li><a href="#">Зорилго</a></li>
                    <li><a href="#">Бүтэц, зохион байгуулалт</a></li>
                    <li><a href="#">Хорооны статистик үзүүлэлтүүд</a></li>
                    <li><a href="#">Холбоо барих</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@m">
                <ul id="component-tab-left" class="uk-switcher">
                    <li><img src="{{URL::to('/images/taniltsuulga.jpg')}}">
                        <p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; 1909 онд одоогийн Яармагын гүүрийн доод хэсэгт Орос худалдаачдын
                            хувь нийлсэн пүүсүүд бий болж арьс шир боловсруулах, ноос угаах, саван үйлдвэрлэх зэргээр
                            тус улсад анхны орчин үеийн үйлдвэрийн шав тавигдсан газар бол одоогийн манай хороо юм.</p>
                        <p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; 1965 онд байгуулагдсан Ажилчдын район, 1992 онд Засаг захиргааны
                            өөрчлөлтөөр Хан-Уул дүүргийн 2-р хороо, 2019 онд НИТХ-ын 25/21 тогтоолоор бүтэц зохион
                            байгуулалт нь шинэчлэгдэн өөрчлөгдсөн.</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; 1965 онд байгуулагдсан Ажилчдын район, 1992 онд Засаг захиргааны
                            өөрчлөлтөөр Хан-Уул дүүргийн 2-р хороо, 2019 онд НИТХ-ын 25/21 тогтоолоор бүтэц зохион
                            байгуулалт нь шинэчлэгдэн өөрчлөгдсөн.</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; Хан-Уул дүүргийн 2-р хороо нь Хан Богд уулын ар бэл, Хатан Туул
                            голын хормойг дэрлэн зүүн урд талаараа Хан-Уул дүүргийн 1-р хороо, 20-р хороотой, баруун
                            талаараа 3-р хороотой, хойд талаараа нийслэлийн Баянгол дүүргийн 3-р хороотой тус тус хиллэн
                            оршдог.</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; Байшин хороололд нийт 3050 өрхийн 12500 орчим хүн ам оршин сууж,
                            тус дүүргийн төвийн гол хороо бөгөөд 160 гаруй үйлчилгээний газар, аж ахуйн нэгж, 63 байранд
                            16 сууц өмчлөгчдийн холбоо үйл ажиллагаа явуулж байна.</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; Тус хорооноос Төрийн соёрхолт Б.Дандар, Хөдөлмөрийн баатар
                            Балжинням, Ж.Цэрэнбүжид, Р.Батнасан, Монгол улсын ударник Д.Даваажав, Монгол Улсын Гавъяат
                            Х.Дамдин, Д.Жанчив, Ц.Шоовдор зэрэг 26 гавъяатан алдартнууд төрөн гарсан бөгөөд тэднээрээ
                            бид бахархдаг юм.</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; <strong>Хан-Уул дүүргийн 2 дугаар хорооны ИНХ-ын
                                даргаар</strong>Г.Энхтуяа 2004-2009 онд, Б.Энххөдөлмөр 2009-2017 онд, 2017 оноос
                            М.Хишгээ одоог хүртэл сонгогдон ажиллаж байна.</p>

                        <p>&nbsp; &nbsp; &nbsp; &nbsp; <strong>Хан-Уул дүүргийн 2 дугаар хорооны даргаар
                            </strong>Ш.Лодоншарав 1985-1990 онд, Д.Алтанцэцэг 1990-1994 онд, Л.Лхагвасүрэн 1994-1996
                            онд, Ч.Наранцэцэг 1996-2000 онд, П.Батхүлэг 2000-2002 онд, С.Болд 2002-2003 онд, Н.Баттөр
                            2003-2006 онд, Ч.Наранцэцэг 2009-2017 онд, 2017 оноос Э.Батмөнх Засаг даргаар ажиллаж байна.
                        </p>

                        <p><strong>ТҮҮХЭН АМЖИЛТУУД</strong></p>

                        <ol>
                            <li>2006 онд Нийслэл, дүүргийн "Шилдэг хороо" Өргөмжлөл</li>
                            <li>2007 онд Нийслэл, дүүргийн "Шилдэг хороо" Өргөмжлөл</li>
                            <li>2009-2013 оны Дүүргийн Спортын 1, 2, 3, 4-р Их наадмын Спортын аварга</li>
                            <li>2011 онд Нийслэлийн "Шилдэг хороо" Өргөмжлөл</li>
                            <li>2013 онд Ардын авьяастан урлагийн наадмын "Шилдэг хороо" Өргөмжлөл</li>
                            <li>2013 оны Дүүргийн "Шилдэг хороо" 3-р байр Өргөмжлөл</li>
                            <li>2014 оны Дүүргийн "Шилдэг хороо" Өргөмжлөл</li>
                            <li>2015 оны Нийслэлийн "Шилдэг хороо" Батламж</li>
                            <li>2016 оны Дүүргийн Спортын 5-р Их наадмын Спортын аварга</li>
                            <li>2017 оны Дүүргийн "Шилдэг хороо" тусгай байр</li>
                            <li>2018 оны Дүүргийн "Шилдэг хэсгийн ахлагч" тусгай байр</li>
                            <li>2018 оны Дүүргийн Спортын 6-р Их наадмын Спортын аварга</li>
                            <li>2019 оны Дүүргийн "Шилдэг хэсгийн ахлагч" дэд байр</li>
                            <li>2019 оны Дүүргийн Спортын 7-р Их наадмын Спортын аварга</li>
                        </ol>
                        <p style="text-align: justify;">&nbsp;</p>
                    </li>
                    <li>
                        <p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; Иргэн танд төрийн үйлчилгээг түргэн шуурхай, чанар хүртээмжтэй
                            хүргэж, оршин суугчдын амьдрах таатай орчин нөхцлийг бүрдүүлж, амьдралын чанарыг
                            сайжруулахын төлөө ажиллана.</p>
                    </li>

                    <li>
                        <p>
                            <center><strong>Бүтэц зохион байгуулалт</strong></center>
                        </p>
                        <table border="1" cellpadding="0" cellspacing="0" style="width:100%;" width="449">
                            <tbody>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">№</td>
                                    <td style="text-align: center;" width="270">
                                        <p></p>
                                    </td>
                                    <td style="text-align: center;" width="30">Ажилчдын тоо</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">1</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хорооны ИНХ-ын дарга, тэргүүлэгч</p>
                                    </td>
                                    <td width="167" style="text-align: center;">-</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">2</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хорооны Засаг дарцаг”</p>
                                    </td>
                                    <td width="167" style="text-align: center;">1</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">3</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Зохион байгуулагч</p>
                                    </td>
                                    <td width="167" style="text-align: center;">2</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">4</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Нийгмийн ажилтан</p>
                                    </td>
                                    <td width="167" style="text-align: center;">1</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">5</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Улсын бүртгэгч</p>
                                    </td>
                                    <td width="167" style="text-align: center;">1</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">6</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Халамжийн ажилтан</p>
                                    </td>
                                    <td width="167" style="text-align: center;">1</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">7</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хэсгийн ахлагч</p>
                                    </td>
                                    <td width="167" style="text-align: center;">11</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">8</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хэсгийн байцаагч</p>
                                    </td>
                                    <td width="167" style="text-align: center;">2</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">9</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Өрхийн эмчийн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">Эмч-4 Сувилагч-6</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp;<strong>
                                <center>Хан-Уул дүүргийн 2-р хорооны байршлын тойм зураг</center>
                            </strong>
                        </p>
                        <img src=" images/toimzurag.png">
                    </li>
                    <li>
                        <p>
                            <center><strong>Үзүүлэлт</strong></center>
                        </p>
                        <table border="1" cellpadding="0" cellspacing="0" style="width:100%;" width="449">
                            <tbody>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">№</td>
                                    <td style="text-align: center;" width="270">
                                        <p></p>
                                    </td>
                                    <td style="text-align: center;" width="30"> Тоо</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">1</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Газар нутгийн хэмжээ</p>
                                    </td>
                                    <td width="167" style="text-align: center;">50га</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">2</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хүн амын тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">12238</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">3</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Өрхийн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">2865</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">4</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Эрэгтэй хүний тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">5860</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">5</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Эмэгтэй хүний тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">7033</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">6</td>
                                    <td width="163" style="text-align: center;">
                                        <p>0-5 настай хүний тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">1860</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">7</td>
                                    <td width="163" style="text-align: center;">
                                        <p>6-18 настай хүний тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">2680</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">8</td>
                                    <td width="163" style="text-align: center;">
                                        <p>25-55 настай хүний тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">6037</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">9</td>
                                    <td width="163" style="text-align: center;">
                                        <p>55-с дээш настай хүний тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">1276</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">10</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Аж ахуйн нэгж байгууллагын тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">192</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">11</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Төрийн өмчийн сургуулийн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">2</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">12</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Төрийн өмчийн цэцэрлэгийн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">3</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">13</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Сургуульд хамрагдаагүй хүүхдийн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">-</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">14</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Цэцэрлэгт хамрагдаагүй хүүхдийн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">-</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">15</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Архи согтууруулах ундаа худалддаг, түүгээр үйлчилдэг газрын тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">18</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">16</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хогийн цэгийн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">9</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">17</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хүүхдийн тоглоомын талбайн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">14</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">18</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Цэцэрлэгт хүрээлэн, талбайн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">3</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">19</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Орон сууцны тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">54</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <p>
                            <center><strong>Халамжийн мэдээлэл</strong></center>
                        </p>
                        <table border="1" cellpadding="0" cellspacing="0" style="width:100%;" width="449">
                            <tbody>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">№</td>
                                    <td style="text-align: center;" width="270">
                                        <p></p>
                                    </td>
                                    <td style="text-align: center;" width="30">Тоо</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">1</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хөгжлийн бэрхшээлтэй иргэн</p>
                                    </td>
                                    <td width="167" style="text-align: center;">290</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">2</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Өрх толгойлсон эцэг</p>
                                    </td>
                                    <td width="167" style="text-align: center;">45</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">3</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Өрх толгойлсон эх</p>
                                    </td>
                                    <td width="167" style="text-align: center;">264</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">4</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Байнгын асаргаатай</p>
                                    </td>
                                    <td width="167" style="text-align: center;">141</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">5</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Бүтэн өнчин</p>
                                    </td>
                                    <td width="167" style="text-align: center;">16</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">6</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хагас өнчин</p>
                                    </td>
                                    <td width="167" style="text-align: center;">69</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">7</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Зорилтод өрхийн тоо</p>
                                    </td>
                                    <td width="167" style="text-align: center;">36</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">8</td>
                                    <td width="163" style="text-align: center;">
                                        <p>Хүнсний эрхийн бичигт хамрагдсан 1-2 түвшин иргэн</p>
                                    </td>
                                    <td width="167" style="text-align: center;">6 өрх</td>
                                </tr>
                            </tbody>
                        </table>

                        <br>
                        <p>
                            <center><strong>Хөдөлмөр эрхлэлт</strong></center>
                        </p>
                        <table border="1" cellpadding="0" cellspacing="0" style="width:100%;" width="449">
                            <tbody>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">№</td>
                                    <td style="text-align: center;" width="270">
                                        <p></p>
                                    </td>
                                    <td style="text-align: center;" width="30">Тоо</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">1</td>
                                    <td width="163">
                                        <p>Хөдөлмөрийн насны хүн</p>
                                    </td>
                                    <td style="text-align: center;" width="85">5408</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">2</td>
                                    <td width="163">
                                        <p>Ажил эрхэлж буй хүн</p>
                                    </td>
                                    <td style="text-align: center;" width="85">3807</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">3</td>
                                    <td width="163">
                                        <p>Ажил эрхлээгүй хүн</p>
                                    </td>
                                    <td style="text-align: center;" width="85">1601</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">4</td>
                                    <td width="163">
                                        <p>Жижиг дунд бизнес эрхлэгчдийн тоо</p>
                                    </td>
                                    <td style="text-align: center;" width="85">119</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">5</td>
                                    <td width="163">
                                        <p>Хөдөлмөрийн насны хөдөлмөрийн чадваргүй хүний тоо</p>
                                    </td>
                                    <td style="text-align: center;" width="85">254</td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <p>
                            <center><strong>Ерөнхий мэдээлэл</strong></center>
                        </p>
                        <table border="1" cellpadding="0" cellspacing="0" style="width:100%;" width="449">
                            <tbody>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">№</td>
                                    <td style="text-align: center;" width="163">
                                        <p>Овог нэр</p>
                                    </td>
                                    <td style="text-align: center;" width="167">Албан тушаал</td>
                                    <td style="text-align: center;" width="85">Утас</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">1</td>
                                    <td width="163">
                                        <p>Э.Батмөнх</p>
                                    </td>
                                    <td width="167">Засаг дарга</td>
                                    <td style="text-align: center;" width="85">91093900</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">2</td>
                                    <td width="163">
                                        <p>Д.Одонтуул</p>
                                    </td>
                                    <td width="167">Хөгжлийн нийгмийн ажилтан</td>
                                    <td style="text-align: center;" width="85">99120111</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">3</td>
                                    <td width="163">
                                        <p>Л.Энхзаяа</p>
                                    </td>
                                    <td width="167">Зохион байгуулагч</td>
                                    <td style="text-align: center;" width="85">99945623</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">4</td>
                                    <td width="163">
                                        <p>Г.Анхбаяр</p>
                                    </td>
                                    <td width="167">Зохион байгуулагч</td>
                                    <td style="text-align: center;" width="85">91915549</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">5</td>
                                    <td width="163">
                                        <p>П.Оюунцэрэн</p>
                                    </td>
                                    <td width="167">Улсын бүртгэгч</td>
                                    <td style="text-align: center;" width="85">88058185</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">6</td>
                                    <td width="163">Ш.Хоролмаа</td>
                                    <td width="167">Халамжийн мэргэжилтэн</td>
                                    <td style="text-align: center;" width="85">
                                        <p>96050010</p>
                                    </td>
                                </tr>
                                <tr height="60">
                                    <td height="60" style="text-align: center;" width="34">7</td>
                                    <td width="163">ӨЭМТ-ийн утас</td>
                                    <td width="167">Тэрмэстий ӨЭМТ</td>
                                    <td style="text-align: center;" width="85">70105003</td>
                                </tr>
                                <tr>
                                    <td height="60" style="text-align: center;" width="34">8</td>
                                    <td width="163">Ж.Болормаа</td>
                                    <td width="167">Тэрмэстий ӨЭМТ-ийн дарга</td>
                                    <td style="text-align: center;" width="85">99734350</td>
                                </tr>
                                <tr>
                                    <td height="60" style="text-align: center;" width="34">9</td>
                                    <td width="163">
                                        <p>д/ч Мөнхцэцэг</p>
                                    </td>
                                    <td width="167">Хэсгийн байцаагч</td>
                                    <td style="text-align: center;" width="85">91917439</td>
                                </tr>
                                <tr>
                                    <td height="60" style="text-align: center;" width="34">10</td>
                                    <td width="163">д/а Ч.Батзаяа</td>
                                    <td width="167">Хорооны цагдаа</td>
                                    <td style="text-align: center;" width="85">88256727</td>
                                </tr>
                                <tr>
                                    <td height="60" style="text-align: center;" width="34">11</td>
                                    <td width="163">Б.Байгаль</td>
                                    <td width="167">1-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">96057700</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">12</td>
                                    <td width="163">
                                        <p>Г.Цэрэннадмид</p>
                                    </td>
                                    <td width="167">2-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">94742804</td>
                                </tr>
                                <tr height="21">
                                    <td height="21" style="text-align: center;" width="34">13</td>
                                    <td width="163">
                                        <p>Н.Амаржаргал</p>
                                    </td>
                                    <td width="167">3-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">91373800</td>
                                </tr>
                                <tr height="21">
                                    <td height="21" style="text-align: center;" width="34">14</td>
                                    <td width="163">
                                        <p>Д.Баярмаа</p>
                                    </td>
                                    <td width="167">4-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">99916781</td>
                                </tr>
                                <tr height="21">
                                    <td height="21" style="text-align: center;" width="34">15</td>
                                    <td width="163">
                                        <p>Т.Нямцэцэг</p>
                                    </td>
                                    <td width="167">5-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">99285790</td>
                                </tr>
                                <tr height="21">
                                    <td height="21" style="text-align: center;" width="34">16</td>
                                    <td width="163">
                                        <p>Ё.Янжиндулам</p>
                                    </td>
                                    <td width="167">6-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">99262131</td>
                                </tr>
                                <tr height="21">
                                    <td height="21" style="text-align: center;" width="34">17</td>
                                    <td width="163">
                                        <p>Н.Одончимэг</p>
                                    </td>
                                    <td width="167">7-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">99909257</td>
                                </tr>
                                <tr>
                                    <td height="21" style="text-align: center;" width="34">18</td>
                                    <td width="163">
                                        <p>Н.Эрдэнэболор</p>
                                    </td>
                                    <td width="167">8-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">80132329</td>
                                </tr>
                                <tr height="21">
                                    <td height="21" style="text-align: center;" width="34">19</td>
                                    <td width="163">
                                        <p>Н.Амарзаяа</p>
                                    </td>
                                    <td width="167">9-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">99299193</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">20</td>
                                    <td width="163">
                                        <p>А.Алтан-Од</p>
                                    </td>
                                    <td width="167">10-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">89454589</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">21</td>
                                    <td width="163">
                                        <p>Бадамхорлоо</p>
                                    </td>
                                    <td width="167">11-р хэсгийн ахлагч</td>
                                    <td style="text-align: center;" width="85">96644150</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <p>
                            <center><strong>Чухал шаардлагатай утасны жагсаалт</strong></center>
                        </p>
                        <table border="1" cellpadding="0" cellspacing="0" style="width:100%;" width="449">
                            <tbody>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">№</td>
                                    <td style="text-align: center;" width="163">
                                        <p></p>
                                    </td>
                                    <td style="text-align: center;" width="85">Утас</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">1</td>
                                    <td width="163">
                                        <p>Хан-Уул дүүргийн ЗДТГ</p>
                                    </td>
                                    <td style="text-align: center;" width="85">77771965</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">2</td>
                                    <td width="163">
                                        <p>Хан-Уул дүүргийн ОБХ</p>
                                    </td>
                                    <td style="text-align: center;" width="85">83120466</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">3</td>
                                    <td width="163">
                                        <p>Хан-Уул дүүргийн ХХҮХ</p>
                                    </td>
                                    <td style="text-align: center;" width="85">342590, 70007494</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">4</td>
                                    <td width="163">
                                        <p>Хэсгийн байцаагч</p>
                                    </td>
                                    <td style="text-align: center;" width="85">89907444, 99046427</td>
                                </tr>
                                <tr>
                                    <td height="20" style="text-align: center;" width="34">5</td>
                                    <td width="163">
                                        <p>Өрхийн эмнэлэг</p>
                                    </td>
                                    <td style="text-align: center;" width="85">70105003</td>
                                </tr>
                                <tr height="20">
                                    <td height="20" style="text-align: center;" width="34">6</td>
                                    <td width="163">Ахмадын дарга</td>
                                    <td style="text-align: center;" width="85">
                                        <p>91201242</p>
                                    </td>
                                </tr>
                                <tr height="60">
                                    <td height="60" style="text-align: center;" width="34">7</td>
                                    <td width="163">ХҮТ-10</td>
                                    <td style="text-align: center;" width="85">70005454</td>
                                </tr>
                                <tr>
                                    <td height="60" style="text-align: center;" width="34">8</td>
                                    <td width="163">Новельнетворк ххк /гэрэлтүүлэг/</td>
                                    <td style="text-align: center;" width="85">99803338</td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection