@extends('web.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Апартмент засах</h2>
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

<form action="{{ route('apartments.update',$apartment->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Категори нэр:</strong>
                <input type="text" name="apartment_name" value="{{ $apartment->apartment_name }}" class="form-control"
                    placeholder="apartment_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Категори дугаар:</strong>
                <input type="number" name="apartment_number" value="{{ $apartment->apartment_number }}"
                    class="form-control" placeholder="apartment_number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Оруулах</button>
        </div>
    </div>

</form>
@endsection