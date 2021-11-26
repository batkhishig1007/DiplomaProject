@extends('web.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Харах</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Буцах</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID дугаар:</strong>
            {{ $post->id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Гарчиг:</strong>
            {{ $post->title }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Товч тайлбар:</strong>
            {{ $post->short_description }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Дэлгэрэнгүй тайлбар:</strong>
            {{ $post->description }}
        </div>
    </div>
    @if( $post->image)
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Зураг оруулах:</strong>
            <img src="/uploads/{{ $post->image }}" width="300px">
        </div>
    </div>
    @endif
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Хэрэглэгч:</strong>
            {{ $post->user ? $post->user->firstname : '' }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Категори:</strong>
            {{ $post->category ? $post->category->category_name : '' }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Харсан тоо:</strong>
            {{ $post->count_see }}
        </div>
    </div>
</div>
@endsection