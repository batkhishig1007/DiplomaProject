@extends('web.admin')

@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Хорооны үйл ажиллагааны мэдээллийн систем Категори</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('categories.create') }}"> Шинэ категори үүсгэх</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID дугаар</th>
        <th>Категори нэр</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->category_name }}</td>
        <td>
            <form action="{{ route('categories.destroy',$value->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('categories.show',$value->id) }}">Харах</a>
                <a class="btn btn-primary" href="{{ route('categories.edit',$value->id) }}">Засах</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Устгах</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $data->links() !!}
@endsection