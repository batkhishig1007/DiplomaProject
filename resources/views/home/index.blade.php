@extends('web.customer')

@section('content')

<section class="u-carousel u-slide u-block-f1b4-1" src="" data-image-width="945" data-image-height="945"
    id="carousel_6f77" data-interval="5000" data-u-ride="carousel">
    <ol class="u-absolute-hcenter u-carousel-indicators u-block-f1b4-2">
        <li data-u-target="#carousel_6f77" data-u-slide-to="0" class="u-active u-grey-30"></li>
        <li data-u-target="#carousel_6f77" class="u-grey-30" data-u-slide-to="1"></li>
        <li data-u-target="#carousel_6f77" class="u-grey-30" data-u-slide-to="2"></li>
    </ol>
    <div class="u-carousel-inner" role="listbox">
        @foreach($slides as $i=>$slide)
        <div class="
        @if($i==0) u-active @endif
            u-align-center
            u-carousel-item
            u-clearfix
            u-image
            u-shading
            u-section-1-1
          " style="background-image:  url({{URL::to('/uploads/'.$slide->image)}}); " data-image-width="945"
            data-image-height="945">
            <div class="u-clearfix u-sheet u-sheet-1">
                <h1 class="u-text u-text-black u-text-default u-title u-text-1">
                    {{$slide->title}}
                </h1>
                <a href="{{URL::to('/news/'.$slide->id)}}" class="u-btn u-button-style u-palette-2-base u-btn-1">Цааш
                    Унших</a>
            </div>
        </div>
        @endforeach
    </div>
    <a class="
          u-carousel-control
          u-carousel-control-prev
          u-text-grey-30
          u-block-f1b4-5
        " href="#carousel_6f77" role="button" data-u-slide="prev">
        <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175">
                <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
            </svg>
        </span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="
          u-absolute-vcenter
          u-carousel-control
          u-carousel-control-next
          u-text-grey-30
          u-block-f1b4-4
        " href="#carousel_6f77" role="button" data-u-slide="next">
        <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175">
                <path
                    d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z">
                </path>
            </svg>
        </span>
        <span class="sr-only">Next</span>
    </a>
</section>
<section class="u-align-center u-clearfix u-white u-section-2" id="carousel_bc4d">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1"><b>Сүүлийн мэдээ мэдээлэл</b></h3>
        <!--blog-->
        <!--blog_options_json-->
        <!--{"type":"Recent","source":"","tags":"","count":""}-->
        <!--/blog_options_json-->
        <div class="u-blog u-blog-1">
            <div class="u-repeater u-repeater-1">
                <!--blog_post-->
                <div class="
                u-align-center
                u-blog-post
                u-container-style
                u-repeater-item
                u-white
                u-repeater-item-1
              ">
                    <div class="
                  u-container-layout u-similar-container u-container-layout-1
                ">
                        <a class="u-post-header-link" href="blog/post-5.html">
                            <!--blog_post_image-->
                            <img class="u-blog-control u-image u-image-1" src="images/medee1.png" data-image-width="792"
                                data-image-height="271" />
                            <!--/blog_post_image-->
                        </a>
                        <!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1">
                            <!--blog_post_metadata_date-->
                            <span class="u-meta-date u-meta-icon">
                                <!--blog_post_metadata_date_content-->Wed Dec 8 2021
                                <!--/blog_post_metadata_date_content-->
                            </span>
                            <!--/blog_post_metadata_date-->
                            <!--blog_post_metadata_comments-->
                            <span class="u-meta-comments u-meta-icon">
                                <!--blog_post_metadata_comments_content-->Comments (0)
                                <!--/blog_post_metadata_comments_content-->
                            </span>
                            <!--/blog_post_metadata_comments-->
                        </div>
                        <!--/blog_post_metadata-->
                        <!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-2">
                            <a class="u-post-header-link" href="blog/post-5.html">
                                <!--blog_post_header_content-->ВАКЦИНЖУУЛАЛТЫН ЦЭГ
                                <!--/blog_post_header_content-->
                            </a>
                        </h4>
                        <!--/blog_post_header-->
                    </div>
                </div>
                <!--/blog_post-->
                <!--blog_post-->
                <div class="
                u-align-center
                u-blog-post
                u-container-style
                u-repeater-item
                u-white
                u-repeater-item-2
              ">
                    <div class="
                  u-container-layout u-similar-container u-container-layout-2
                ">
                        <a class="u-post-header-link" href="blog/post-4.html">
                            <!--blog_post_image-->
                            <img class="u-blog-control u-image u-image-2" src="images/medee2.jpg" data-image-width="381"
                                data-image-height="76" />
                            <!--/blog_post_image-->
                        </a>
                        <!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-2">
                            <!--blog_post_metadata_date-->
                            <span class="u-meta-date u-meta-icon">
                                <!--blog_post_metadata_date_content-->Wed Dec 8 2021
                                <!--/blog_post_metadata_date_content-->
                            </span>
                            <!--/blog_post_metadata_date-->
                            <!--blog_post_metadata_comments-->
                            <span class="u-meta-comments u-meta-icon">
                                <!--blog_post_metadata_comments_content-->Comments (0)
                                <!--/blog_post_metadata_comments_content-->
                            </span>
                            <!--/blog_post_metadata_comments-->
                        </div>
                        <!--/blog_post_metadata-->
                        <!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-3">
                            <a class="u-post-header-link" href="blog/post-4.html">
                                <!--blog_post_header_content-->АЖ АХУЙН НЭГЖ, БАЙГУУЛЛАГЫН тооллого
                                <!--/blog_post_header_content-->
                            </a>
                        </h4>
                        <!--/blog_post_header-->
                    </div>
                </div>
                <!--/blog_post-->
                <!--blog_post-->
                <div class="
                u-align-center
                u-blog-post
                u-container-style
                u-repeater-item
                u-white
                u-repeater-item-3
              ">
                    <div class="
                  u-container-layout u-similar-container u-container-layout-3
                ">
                        <a class="u-post-header-link" href="blog/post-3.html">
                            <!--blog_post_image-->
                            <img class="u-blog-control u-image u-image-3" src="images/medee14.png"
                                data-image-width="960" data-image-height="720" />
                            <!--/blog_post_image-->
                        </a>
                        <!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-3">
                            <!--blog_post_metadata_date-->
                            <span class="u-meta-date u-meta-icon">
                                <!--blog_post_metadata_date_content-->Wed Dec 8 2021
                                <!--/blog_post_metadata_date_content-->
                            </span>
                            <!--/blog_post_metadata_date-->
                            <!--blog_post_metadata_comments-->
                            <span class="u-meta-comments u-meta-icon">
                                <!--blog_post_metadata_comments_content-->Comments (0)
                                <!--/blog_post_metadata_comments_content-->
                            </span>
                            <!--/blog_post_metadata_comments-->
                        </div>
                        <!--/blog_post_metadata-->
                        <!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-4">
                            <a class="u-post-header-link" href="blog/post-3.html">
                                <!--blog_post_header_content-->“Шар дарцаг” аян Хан-Уул дүүрэгт үргэлжилж байна
                                <!--/blog_post_header_content-->
                            </a>
                        </h4>
                        <!--/blog_post_header-->
                    </div>
                </div>
                <!--/blog_post-->
                <!--blog_post-->
                <div class="
                u-align-center
                u-blog-post
                u-container-style
                u-repeater-item
                u-white
                u-repeater-item-3
              ">
                    <div class="
                  u-container-layout u-similar-container u-container-layout-3
                ">
                        <a class="u-post-header-link" href="blog/post-2.html">
                            <!--blog_post_image-->
                            <img class="u-blog-control u-image u-image-4" src="images/medee7.png" data-image-width="700"
                                data-image-height="480" />
                            <!--/blog_post_image-->
                        </a>
                        <!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-3">
                            <!--blog_post_metadata_date-->
                            <span class="u-meta-date u-meta-icon">
                                <!--blog_post_metadata_date_content-->Wed Dec 8 2021
                                <!--/blog_post_metadata_date_content-->
                            </span>
                            <!--/blog_post_metadata_date-->
                            <!--blog_post_metadata_comments-->
                            <span class="u-meta-comments u-meta-icon">
                                <!--blog_post_metadata_comments_content-->Comments (0)
                                <!--/blog_post_metadata_comments_content-->
                            </span>
                            <!--/blog_post_metadata_comments-->
                        </div>
                        <!--/blog_post_metadata-->
                        <!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-4">
                            <a class="u-post-header-link" href="blog/post-2.html">
                                <!--blog_post_header_content-->“Өвлийн идэш” арга хэмжээ болно
                                <!--/blog_post_header_content-->
                            </a>
                        </h4>
                        <!--/blog_post_header-->
                    </div>
                </div>
                <!--/blog_post-->
                <!--blog_post-->
                <div class="
                u-align-center
                u-blog-post
                u-container-style
                u-repeater-item
                u-white
                u-repeater-item-3
              ">
                    <div class="
                  u-container-layout u-similar-container u-container-layout-3
                ">
                        <a class="u-post-header-link" href="blog/post-1.html">
                            <!--blog_post_image-->
                            <img class="u-blog-control u-image u-image-5" src="images/medee11.jpg"
                                data-image-width="626" data-image-height="417" />
                            <!--/blog_post_image-->
                        </a>
                        <!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-3">
                            <!--blog_post_metadata_date-->
                            <span class="u-meta-date u-meta-icon">
                                <!--blog_post_metadata_date_content-->Wed Dec 8 2021
                                <!--/blog_post_metadata_date_content-->
                            </span>
                            <!--/blog_post_metadata_date-->
                            <!--blog_post_metadata_comments-->
                            <span class="u-meta-comments u-meta-icon">
                                <!--blog_post_metadata_comments_content-->Comments (0)
                                <!--/blog_post_metadata_comments_content-->
                            </span>
                            <!--/blog_post_metadata_comments-->
                        </div>
                        <!--/blog_post_metadata-->
                        <!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-4">
                            <a class="u-post-header-link" href="blog/post-1.html">
                                <!--blog_post_header_content-->Нийслэлийн Газар зохион байгуулалтын ерөнхий төлөвлөгөөг
                                шинэчлэн боловсруулж байна
                                <!--/blog_post_header_content-->
                            </a>
                        </h4>
                        <!--/blog_post_header-->
                    </div>
                </div>
                <!--/blog_post-->
                <!--blog_post-->
                <div class="
                u-align-center
                u-blog-post
                u-container-style
                u-repeater-item
                u-white
                u-repeater-item-3
              ">
                    <div class="
                  u-container-layout u-similar-container u-container-layout-3
                ">
                        <a class="u-post-header-link" href="blog/post.html">
                            <!--blog_post_image-->
                            <img class="u-blog-control u-image u-image-6" src="images/medee13.jpg"
                                data-image-width="400" data-image-height="266" />
                            <!--/blog_post_image-->
                        </a>
                        <!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-3">
                            <!--blog_post_metadata_date-->
                            <span class="u-meta-date u-meta-icon">
                                <!--blog_post_metadata_date_content-->Wed Dec 8 2021
                                <!--/blog_post_metadata_date_content-->
                            </span>
                            <!--/blog_post_metadata_date-->
                            <!--blog_post_metadata_comments-->
                            <span class="u-meta-comments u-meta-icon">
                                <!--blog_post_metadata_comments_content-->Comments (0)
                                <!--/blog_post_metadata_comments_content-->
                            </span>
                            <!--/blog_post_metadata_comments-->
                        </div>
                        <!--/blog_post_metadata-->
                        <!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-4">
                            <a class="u-post-header-link" href="blog/post.html">
                                <!--blog_post_header_content-->Хан-Уул лиг” сагсан бөмбөгийн тэмцээн
                                <!--/blog_post_header_content-->
                            </a>
                        </h4>
                        <!--/blog_post_header-->
                    </div>
                </div>
                <!--/blog_post-->
            </div>
        </div>
        <!--/blog-->
        <p class="u-text u-text-body-alt-color u-text-default u-text-8">
            Images from
            <a href="https://www.freepik.com/free-photos-vectors/background" class="
              u-active-none
              u-border-1
              u-border-white
              u-btn
              u-button-link
              u-button-style
              u-hover-none
              u-none
              u-text-body-alt-color
              u-btn-1
            ">Freepik</a>
        </p>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-3" id="sec-f4a9">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="
                u-align-center u-container-style u-list-item u-repeater-item
              ">
                    <div class="
                  u-container-layout u-similar-container u-container-layout-1
                ">
                        <h3 class="u-align-center u-text u-text-default u-text-3">
                            Хэсгийн цагдаа
                        </h3>
                        <p class="u-text u-text-2">
                            Хорооны нутаг дэвсгэрт нийгмийн хэв журам сахиулах, гэмт
                            хэргээс урьдчилан сэргийлэх, тэмцэх. &nbsp;Хорооны
                            нутаг дэвсгэрт үйлдэгдсэн гэмт хэрэг, зөрчлийн судалгаанд
                            үнэлэлт дүгнэлт өгч, гэмт хэрэгтэй тэмцэх, нийгмийн хэв
                            журам хамгаалах, урьдчилан сэргийлэх ажлыг иргэд, төрийн
                            болон төрийн бус байгууллагатай хамтран хэрэгжүүлэх.
                            <br>&nbsp;Утас: +976 9191-7439
                        </p>
                        <div class="
                    u-custom-item u-social-icons u-spacing-10 u-social-icons-1
                  ">
                            <a class="u-social-url" target="_blank"
                                href="https://www.facebook.com/profile.php?id=100064750566804"><span class="
                        u-custom-item
                        u-icon
                        u-icon-circle
                        u-social-facebook
                        u-social-icon
                        u-icon-1
                      "><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 32 32" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-171c"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 32 32" id="svg-171c">
                                        <g>
                                            <path
                                                d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z"
                                                fill="#FFFFFF" id="f"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="
                u-align-center u-container-style u-list-item u-repeater-item
              ">
                    <div class="
                  u-container-layout u-similar-container u-container-layout-2
                ">
                        <h3 class="u-align-center u-text u-text-default u-text-3">
                            Өрхийн эмнэлэг
                        </h3>
                        <p class="u-text u-text-4">
                            Засаг даргын эрүүл мэндийн тухай хууль тогтоомжоор хүлээсэн
                            чиг үүргийг гардан&nbsp;хэрэгжүүлэн ажиллах.
                            &nbsp;Иргэдийн эрүүл мэндийн урьдчилан сэргийлэх болон
                            анхан шатны тусламж үйлчилгээг&nbsp; иргэдэд хурдан шуурхай
                            хүргэх. Эрүүл мэндийн төвийн хүртээмж үйлчилгээг өргөтгөх
                            зорилгоор иргэдийг цахим карт, хувийн эрүүл мэндийн
                            нэгдсэн мэдээллийн сантай болгох боломжийг бүрдүүлэх.
                            <br>&nbsp;Утас: +976 7010-5003
                        </p>
                        <div class="
                    u-custom-item u-social-icons u-spacing-10 u-social-icons-2
                  ">
                            <a class="u-social-url" target="_blank"
                                href="https://www.facebook.com/profile.php?id=100008981198386"><span class="
                        u-custom-item
                        u-icon
                        u-icon-circle
                        u-social-facebook
                        u-social-icon
                        u-icon-2
                      "><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 32 32" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bb56"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 32 32" id="svg-bb56">
                                        <g>
                                            <path
                                                d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z"
                                                fill="#FFFFFF" id="f"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="
                u-align-center u-container-style u-list-item u-repeater-item
              ">
                    <div class="
                  u-container-layout u-similar-container u-container-layout-3
                ">
                        <h3 class="u-align-center u-text u-text-default u-text-5">
                            Иргэдийн хурлын танхим
                        </h3>
                        <p class="u-text u-text-6">
                            Хорооны иргэдийн нийтийн хурлын бэлтгэл ажлыг хангах,
                            хуралдааныг зохион байгуулах. &nbsp;Иргэний танхимаас
                            зохион байгуулаж буй аливаа үйл ажиллагааг зохион байгуулах.
                            Иргэний танхимаас зохион байгуулж буй хэлэлцүүлэг,
                            сургалт, олон нийтийн арга хэмжээний талаарх тайлан
                            мэдээг гаргаж иргэний танхимд хүргэх.
                            <br>&nbsp;Утас: +976 9109-3900
                        </p>
                        <div class="
                    u-custom-item u-social-icons u-spacing-10 u-social-icons-3
                  ">
                            <a class="u-social-url" target="_blank"
                                href="https://www.facebook.com/profile.php?id=100064750566804"
                                title="Хан-Уул дүүргийн 2-р Хороо"><span class="
                        u-custom-item
                        u-icon
                        u-icon-circle
                        u-social-facebook
                        u-social-icon
                        u-icon-3
                      "><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 32 32" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d581"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 32 32" id="svg-d581">
                                        <g>
                                            <path
                                                d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z"
                                                fill="#FFFFFF" id="f"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-4" id="sec-1cbe">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1"><b>Хэсгийн ахлагчид</b>
        </h3>
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <div class="u-container-style u-group u-group-1">
                            <div class="u-container-layout u-container-layout-2"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-1"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-669b"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-669b">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-2">Б.Байгаль</h5>
                                <p class="u-align-center u-text u-text-3">1-р хэсгийн Нэхмэл 1, 2, 10, 7, ЧӨЧ-50, 6А
                                    байрнуудын ахлагч Б.Байгаль 96057700</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                        <div class="u-container-style u-group u-video-cover u-group-2">
                            <div class="u-container-layout u-container-layout-4"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-2"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0f70"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-0f70">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-4">Д.Цэрэннадмид</h5>
                                <p class="u-align-center u-text u-text-5">2-р хэсгийн Нэхмэл 11, 12, 13, 16, 17, 18,
                                    Эко-12, 17, То Ван-24 байрнуудын ахлагч Д.Цэрэннадмид 94742804</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-5">
                        <div class="u-container-style u-group u-video-cover u-group-3">
                            <div class="u-container-layout u-container-layout-6"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-3"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3da0"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-3da0">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-6">Н.Амаржаргал</h5>
                                <p class="u-align-center u-text u-text-7">3-р хэсгийн 12а, 12б, 12в, 31 байрнуудын
                                    ахлагч Н.Амаржаргал 91373800</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-7">
                        <div class="u-container-style u-group u-video-cover u-group-4">
                            <div class="u-container-layout u-container-layout-8"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-4"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6568"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-6568">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-8">Д.Баярмаа</h5>
                                <p class="u-align-center u-text u-text-9">4-р хэсгийн 8, 8а, 9, 10, 20 байрнуудын
                                    ахлагч Д.Баярмаа 99916781</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-9">
                        <div class="u-container-style u-group u-video-cover u-group-5">
                            <div class="u-container-layout u-container-layout-10"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-5"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6568"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-6568">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-10">Т.Нямцэцэг</h5>
                                <p class="u-align-center u-text u-text-11">5-р хэсгийн 18, 22, 23, 33, 35а, 35б, 28/аос/
                                    байрнуудын ахлагч
                                    Т.Нямцэцэг 99285790</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-11">
                        <div class="u-container-style u-group u-video-cover u-group-6">
                            <div class="u-container-layout u-container-layout-12"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-6"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6568"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-6568">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-12">Ё.Янжиндулам</h5>
                                <p class="u-align-center u-text u-text-13">6-р хэсгийн 20, 21, 29 байрнуудын ахлагч
                                    Ё.Янжиндулам 99262131</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-13">
                        <div class="u-container-style u-group u-video-cover u-group-7">
                            <div class="u-container-layout u-container-layout-14"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-7"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6568"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-6568">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-14">Н.Одончимэг</h5>
                                <p class="u-align-center u-text u-text-15">7-р хэсгийн 3, 4, 7 байрнуудын ахлагч
                                    Н.Одончимэг 99909257</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-15">
                        <div class="u-container-style u-group u-video-cover u-group-8">
                            <div class="u-container-layout u-container-layout-16"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-8"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6568"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-6568">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-16">Н.Эрдэнэболор</h5>
                                <p class="u-align-center u-text u-text-17">8-р хэсгийн 29, 30, 31, 33, 34, АШ-19, 32А,
                                    32-1-АОС, ЭЗҮДС байрнуудын ахлагч
                                    Н.Эрдэнэболор 80132329</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-17">
                        <div class="u-container-style u-group u-video-cover u-group-9">
                            <div class="u-container-layout u-container-layout-18"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-9"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6568"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-6568">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-18">Н.Амарзаяа</h5>
                                <p class="u-align-center u-text u-text-19">9-р хэсгийн нутгийн буян-14, 37А, 37Б
                                    байрнуудын ахлагч
                                    Н.Амарзаяа 99299193</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-19">
                        <div class="u-container-style u-group u-video-cover u-group-10">
                            <div class="u-container-layout u-container-layout-20"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-10"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6568"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-6568">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-20">А.Алтан-Од</h5>
                                <p class="u-align-center u-text u-text-21">10-р хэсгийн Гааль-17, 28, 30 байрнуудын
                                    ахлагч
                                    А.Алтан-Од 89454589</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-21">
                        <div class="u-container-style u-group u-video-cover u-group-11">
                            <div class="u-container-layout u-container-layout-22"><span
                                    class="u-icon u-icon-rounded u-palette-4-light-3 u-spacing-10 u-icon-11"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 91 91"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6568"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 91 91" id="svg-6568">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M69.867,27.771c0,13.714-11.045,24.827-24.672,24.827c-13.619,0-24.66-11.113-24.66-24.827      c0-13.708,11.041-24.825,24.66-24.825C58.822,2.945,69.867,14.063,69.867,27.771z"
                                                            fill="#E0F1F8"></path>
                                                        <path
                                                            d="M45.195,55.11c-14.982,0-27.172-12.265-27.172-27.34c0-15.073,12.189-27.337,27.172-27.337      c14.989,0,27.184,12.264,27.184,27.337C72.379,42.846,60.185,55.11,45.195,55.11z M45.195,5.459      c-12.213,0-22.146,10.008-22.146,22.312s9.934,22.314,22.146,22.314c12.219,0,22.158-10.011,22.158-22.314      S57.414,5.459,45.195,5.459z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                    <path
                                                        d="M75.786,82.201c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-6.277-3.455-10.713-10.561-13.559     c-1.289-0.516-1.914-1.978-1.398-3.267c0.515-1.287,1.977-1.916,3.266-1.398c11.338,4.541,13.719,12.416,13.719,18.224v19.559     C78.299,81.076,77.174,82.201,75.786,82.201z"
                                                        fill="#454B53"></path>
                                                    <path
                                                        d="M15.007,82.198c-1.388,0-2.513-1.125-2.513-2.513V60.13c0-8.317,4.6-14.615,13.299-18.212     c1.283-0.53,2.752,0.08,3.282,1.361c0.53,1.282-0.079,2.752-1.362,3.282C20.854,49.397,17.52,53.836,17.52,60.13v19.556     C17.52,81.073,16.395,82.198,15.007,82.198z"
                                                        fill="#454B53"></path>
                                                    <g>
                                                        <polygon fill="#9ABFDA"
                                                            points="54.059,81.47 45.4,88.402 36.732,81.47 42.229,54.687 45.381,54.687 48.481,54.687     ">
                                                        </polygon>
                                                        <path
                                                            d="M45.4,90.915c-0.556,0-1.111-0.184-1.57-0.551l-8.668-6.933c-0.736-0.59-1.081-1.542-0.892-2.467      l5.497-26.783c0.24-1.169,1.269-2.008,2.461-2.008h6.253c1.19,0,2.218,0.835,2.46,2.001l5.577,26.783      c0.192,0.926-0.151,1.882-0.89,2.473l-8.658,6.933C46.512,90.731,45.955,90.915,45.4,90.915z M39.502,80.468l5.896,4.717      l5.887-4.712l-4.847-23.273h-2.16L39.502,80.468z"
                                                            fill="#454B53"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>


                                </span>
                                <h5 class="u-align-center u-text u-text-22">Бадамхорлоо</h5>
                                <p class="u-align-center u-text u-text-23">11-р хэсгийн 35а, 35б байрнуудын ахлагч
                                    Бадамхорлоо 89288225</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection