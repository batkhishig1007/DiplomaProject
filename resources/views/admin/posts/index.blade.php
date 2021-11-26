@extends('web.admin')

@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Хорооны үйл ажиллагааны мэдээллийн системийн ПОСТ</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="/admin/posts/create">Шинэ пост үүсгэх</a>
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
        <th>ID</th>
        <th>Гарчиг</th>
        <th>Зураг</th>
        <th>Категори</th>
        <th>Харсан тоо</th>
        <th width="280px">Үйлдэл</th>
    </tr>
    @foreach ($data as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->title }}</td>
        <td>
            @if($value->image)
            <img src="/uploads/{{ $value->image}}" width="100px">
            @endif
        </td>
        <td>{{ $value->category ? $value->category->category_name : '' }}</td>
        <td>{{ $value->count_see }}</td>
        <td>
            <form action="{{ route('posts.destroy',$value->id) }}" method="POST" enctype="multipart/form-data">
                <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Харах</a>
                <a class="btn btn-primary" href=" {{ route('posts.edit',$value->id) }}">Засах</a>
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