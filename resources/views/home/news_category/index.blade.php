@extends('web.customer')

@section('content')
<section class="u-clearfix u-section-3" id="sec-abd0">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <!-- <div class="u-list u-list-1"> -->
        <div class="u-repeater u-repeater-1">
            <!-- @foreach ($menu_categories as $key => $value)
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        @if($category_id != null && $category_id == $value->id)
                        <a class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1"
                            href="{{ route('news_categories.show',$value->id) }}"
                            style="background: #dedede !important">
                            {{$value->category_name}}
                        </a>
                        @else
                        <a class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1"
                            href="{{ route('news_categories.show',$value->id) }}">
                            {{$value->category_name}}
                        </a>
                        @endif
                    </div>
                </div>
                @endforeach -->

            @foreach ($data as $key => $value)
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-1"
                    style="background-image:  url({{URL::to('/uploads/'.$value->image)}}); " data-image-width="2000"
                    data-image-height="1333">
                    <h3 class="u-text u-text-default u-text-1">{{$value->title}}</h3>
                    <p class="u-text u-text-2">>{{$value->short_description}}</p>
                    <a class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1"
                        href="{{ route('news.show',$value->id) }}">
                        дэлгэрэнгүй
                    </a>
                </div>
            </div>
            @endforeach
            <!-- </div> -->
        </div>
        {!! $data->links() !!}
    </div>
</section>
@endsection