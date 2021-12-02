@extends('web.admin')

@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Хорооны үйл ажиллагааны мэдээллийн Санал, хүсэлт </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('applications.create') }}"> Шинэ санал, хүсэлт үүсгэх</a>
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
        <th>Гарчиг</th>
        <th>Тайлбар</th>
        <th>Майл</th>
        <th>Мэдээний ID</th>
        <th>Хэрэглэгчийн ID</th>
        <th>Санал хүсэлт хаагдсан эсэх</th>
        <th width="280px">Үйлдэл</th>
    </tr>
    @foreach ($data as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->title }}</td>
        <td>{{ \Str::limit($value->description, 100) }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->post_id }}</td>
        <td>{{ $value->user_id }}</td>
        <td>{{ $value->is_closed }}</td>
        <td>
            <form action="{{ route('applications.destroy',$value->id) }}" method="POST" enctype="multipart/form-data">
                <a class="btn btn-info" href="{{ route('applications.show',$value->id) }}">Харах</a>
                <a class="btn btn-primary" href="{{ route('applications.edit',$value->id) }}">Засах</a>
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