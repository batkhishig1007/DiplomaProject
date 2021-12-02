@extends('web.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Шинэ Апартмент нэмэх</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('apartments.index') }}"> Буцах</a>
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

<form action="{{ route('apartments.store') }}" method="POST">
    @csrf

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Апартмент нэр:</strong>
                <select class="form-select form-control" name="apartment_id" aria-label="Сонгоно уу">
                    @foreach ($apartment as $key => $value)
                    <option value="{{$value->id}}" selected>{{$value->apartment_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Апартмент дугаар:</strong>
                <select class="form-select form-control" name="apartment_id" aria-label="Сонгоно уу">
                    @foreach ($apartment as $key => $value)
                    <option value="{{$value->id}}" selected>{{$value->apartment_number}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хэрэглэгчийн дугаар:</strong>
                <select class="form-select form-control" name="user_id" aria-label="Сонгоно уу">
                    @foreach ($user as $key => $value)
                    <option value="{{$value->id}}" selected>{{$value->username}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Оруулах</button>
        </div>
    </div>

</form>
@endsection