@extends('web.customer')

@section('content')
<section class="u-clearfix u-section-3" id="sec-abd0">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-repeater u-repeater-1">
            @foreach ($data as $key => $value)
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                    <img class="u-blog-control u-image u-image-1" src="{{URL::to('/uploads/'.$value->image)}}"
                        data-image-width="2000" data-image-height="1333">
                    <h6 class="u-blog-control u-text u-text-2">{{$value->title}}</h6>
                    <a class="u-btn u-button-style u-palette-2-base u-btn-1" href="{{ route('news.show',$value->id) }}">
                        Дэлгэрэнгүй
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        {!! $data->links() !!}
    </div>
</section>
@endsection