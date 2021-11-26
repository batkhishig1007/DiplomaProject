@extends('web.admin')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Шинэ хэрэглэгч нэмэх</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Буцах</a>
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
   
<form action="{{ route('users.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хэрэглэгчийн нэр:</strong>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Нууц үг:</strong>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Нэр:</strong>
                <input type="text" name="firstname" class="form-control" placeholder="Enter firstname">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Овог:</strong>
                <input type="text" name="lastname" class="form-control" placeholder="Enter lastname">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Регистрийн дугаар:</strong>
                <input type="text" name="rd" class="form-control" placeholder="Enter rd">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>И-мэйл:</strong>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Утасны дугаар:</strong>
                <input type="text" name="phone" class="form-control" placeholder="Enter phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Төрсөн өдөр:</strong>
                <input type="date" name="birthday" class="form-control" placeholder="Enter birthday">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хүйс:</strong>
                <select name="gender" class="form-control"  >
                    <option value="male">Эрэгтэй</option>
                    <option value="female">Эмэгтэй</option>
                    <option value="undefined">Тодорхойгүй</option> 
                <select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хэрэглэгчийн төрөл:</strong>
                <select name="user_type" class="form-control"  >
                    <option value="admin">Админ</option>
                    <option value="operator">Оператор</option>
                    <option value="user">Хэрэглэгч</option> 
                <select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хотын ID:</strong>
                <input type="number" name="city_id" class="form-control" placeholder="Enter city_id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Дүүргийн ID:</strong>
                <input type="number" name="district_id" class="form-control" placeholder="Enter district_id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хорооны ID:</strong>
                <input type="number" name="ward_id" class="form-control" placeholder="Enter ward_id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Хаяг:</strong>
                <input type="text" name="address" class="form-control" placeholder="Enter address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Идэвхтэй эсэх:</strong>
                <!-- <input type="radio" name="is_active" class="form-control" placeholder="Enter is_active"> -->
                <select name="is_active" class="form-control"  >
                    <option value="true" >Идэвхитэй</option>
                    <option value="false" >Идэвхигүй</option>
                <select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Сүүлд нэвтэрсэн хугацаа:</strong>
                <input type="text" name="last_logined" class="form-control" placeholder="Enter last_logined">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Оруулах</button>
        </div>
    </div>
   
</form>
@endsection