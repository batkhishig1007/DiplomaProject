@extends('web.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Шинэ категори нэмэх</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('categories.index') }}"> Буцах</a>
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

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Категори нэр:</strong>
                <input type="text" name="category_name" class="form-control" placeholder="Enter category_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Оруулах</button>
        </div>
    </div>

</form>
@endsection