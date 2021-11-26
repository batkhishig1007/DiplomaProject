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
                <strong>Зураг оруулах:</strong>
                <input type="file" name="image" value="{{ $application->image }}" class="form-control"
                    placeholder="image">
                <img src="/uploads/{{ $application->image }}" width="200px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Мэдээний ID:</strong>
                <input type="number" name="post_id" value="{{ $application->post_id }}" class="form-control"
                    placeholder="post_id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хэрэглэгчийн ID:</strong>
                <input type="number" name="user_id" value="{{ $application->user_id }}" class="form-control"
                    placeholder="user_id">
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