@extends('web.customer')

@section('content')
<section class="u-clearfix u-section-1" id="sec-6ecd">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-image u-layout-cell u-left-cell u-size-36 u-image-1" src=""
                        data-image-width="1080" data-image-height="1080">
                        <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                    </div>
                    <div
                        class="u-align-left u-container-style u-layout-cell u-right-cell u-size-24 u-white u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                            <h2 class="u-text u-text-1">{{$news->news_title}}</h2>
                            <p class="u-text u-text-2">{{$news->short_description}}</p>
                            <p class="u-text u-text-2">{{$news->short_description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection