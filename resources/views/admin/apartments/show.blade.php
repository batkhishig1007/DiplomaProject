@extends('web.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Апартмент харах</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('apartments.index') }}"> Буцах</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID дугаар:</strong>
            {{ $apartment->id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Апартмент нэр:</strong>
            {{ $apartment->apartment_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Апартмент дугаар:</strong>
            {{ $apartment->apartment_number }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Хэрэглэгчийн ID:</strong>
            {{ $apartment->user_id }}
        </div>
    </div>
</div>
@endsection