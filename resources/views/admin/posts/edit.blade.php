@extends('web.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Засах</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Буцах</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID дугаар:</strong>
                    <input type="number" name="id" value="{{ $post->id }}" class="form-control" placeholder="Id">
                </div>
            </div> -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Гарчиг:</strong>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Товч тайлбар:</strong>
                <textarea class="form-control" name="short_description"
                    placeholder="Short_description">{{ $post->short_description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Дэлгэрэнгүй тайлбар:</strong>
                <textarea class="form-control" style="height:150px" name="description"
                    placeholder="Detail">{{ $post->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Зураг оруулах:</strong>
                <input type="file" name="image" value="{{ $post->image }}" class="form-control"
                    placeholder="Post image">
                <img src="/uploads/{{ $post->image }}" width="200px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хэрэглэгчийн ID:</strong>
                <input type="number" name="user_id" value="{{ $post->user_id }}" class="form-control"
                    placeholder="User_id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Категорийн ID:</strong>
                <input type="number" name="category_id" value="{{ $post->category_id }}" class="form-control"
                    placeholder="Category_id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Харсан тоо:</strong>
                <input type="number" name="count_see" value="{{ $post->count_see }}" class="form-control"
                    placeholder="Count_see">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Оруулах</button>
        </div>
    </div>

</form>
@endsection