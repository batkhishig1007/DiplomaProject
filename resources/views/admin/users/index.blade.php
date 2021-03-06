@extends('web.admin')

@section('content')
<div class="row" style="margin-top: 5rem;">
    <!-- <div class="col-lg-12 margin-tb"> -->
    <div class="pull-left">
        <h2>Хорооны үйл ажиллагааны мэдээллийн системийн Хэрэглэгчид</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('users.create') }}"> Шинэ хэрэглэгч үүсгэх</a>
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
        <th>Хэрэглэгчийн нэр</th>
        <th>Нэр</th>
        <th>Овог</th>
        <th>И-мэйл</th>
        <th>Утасны дугаар</th>
        <th>Хүйс</th>
        <th>Хэрэглэгчийн төрөл</th>
        <th>Апартмент ID</th>
        <th>Хаяг</th>
        <th>Идэвхтэй эсэх</th>
        <th>Сүүлд нэвтэрсэн хугацаа</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->username }}</td>
        <td>{{ $value->firstname }}</td>
        <td>{{ $value->lastname }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->phone }}</td>
        <td>{{ $value->gender }}</td>
        <td>{{ $value->admin_type }}</td>
        <td>{{ $value->apartment ? $value->apartment->apartment_name . ' /' . $value->apartment->apartment_number : '' }}
        </td>
        <td>{{ $value->address }}</td>
        <td>{{ $value->is_active }}</td>
        <td>{{ $value->last_logined }}</td>
        <td>
            <form action="{{ route('users.destroy',$value->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('users.show',$value->id) }}">Харах</a>
                <a class="btn btn-primary" href="{{ route('users.edit',$value->id) }}">Засах</a>
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