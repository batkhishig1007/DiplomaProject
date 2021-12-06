@extends('web.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Санал хүсэлт засах</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('applications.index') }}"> Буцах</a>
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

<form action="{{ route('applications.update',$application->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Гарчиг:</strong>
                <input type="text" name="title" value="{{ $application->title }}" class="form-control"
                    placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Тайлбар:</strong>
                <textarea class="form-control" style="height:150px" name="description"
                    placeholder="Detail">{{ $application->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Майл:</strong>
                <input type="email" name="email" value="{{ $application->email }}" class="form-control"
                    placeholder="Title email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Мэдээ:</strong>
                <select class="form-select form-control" name="post_id" aria-label="Сонгоно уу">
                    @foreach ($post as $key => $value)
                    <option value="{{$value->id}}" selected>{{$value->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хэрэглэгчийн ID:</strong>
                <select class="form-select form-control" name="username" aria-label="Сонгоно уу">
                    @foreach ($user as $key => $value)
                    <option value="{{$value->id}}" selected>{{$value->username}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Санал хүсэлт хаагдсан эсэх:</strong>
                <select name="is_closed" class="form-control">
                    <option value="true">Хаагдсан</option>
                    <option value="false">Хаагдаагүй</option>
                    <select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Оруулах</button>
        </div>
    </div>

</form>
@endsection