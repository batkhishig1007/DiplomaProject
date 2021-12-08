@extends('web.customer')

@section('content')
<section class="u-clearfix u-section-1" id="sec-6ecd">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout singleNews">
                <div class="u-layout-row">
                    <h2 class="u-text u-text-1 newstitle">{{$news->title}}</h2>
                    <div class="newsimage">
                        <img src="{{URL::to('/uploads/'.$news->image)}}" data-image-width="1080"
                            data-image-height="1080">
                    </div>
                    <div class="u-text u-text-2 newscontent">{{$news->description}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection