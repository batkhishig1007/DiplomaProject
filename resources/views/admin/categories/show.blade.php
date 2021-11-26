@extends('web.admin')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Категори харах</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Буцах</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID дугаар:</strong>
                {{ $category->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Категори нэр:</strong>
                {{ $category->category_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Үндсэн ангиллын ID:</strong>
                {{ $category->main_id }}
            </div>
        </div>
    </div>
@endsection