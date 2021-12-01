@extends('web.customer')

@section('content')
<section class="u-clearfix u-section-1" id="sec-6ecd">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <h2 class="u-text u-text-1">{{$news->title}}</h2>
                    <br>
                    <img class="u-blog-control u-image u-image-1 center" src="{{URL::to('/uploads/'.$news->image)}}"
                        data-image-width="1080" data-image-height="1080">
                    <br>
                    <p class="u-text u-text-2">{{$news->description}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection