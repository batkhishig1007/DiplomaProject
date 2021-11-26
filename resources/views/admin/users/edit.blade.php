@extends('web.admin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Засах </h2>
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
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID дугаар:</strong>
                    <input type="text" name="id" value="{{ $user->id }}" class="form-control" placeholder="id">
                </div>
            </div> -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Хэрэглэгчийн нэр:</strong>
                    <input type="text" name="username" value="{{ $user->username }}" class="form-control" placeholder="username">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Нууц үг:</strong>
                    <input type="text" name="password" value="{{ $user->password }}" class="form-control" placeholder="password">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Нэр:</strong>
                    <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control" placeholder="firstname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Овог:</strong>
                    <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control" placeholder="lastname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Регистрийн дугаар:</strong>
                    <input type="text" name="rd" value="{{ $user->rd }}" class="form-control" placeholder="rd">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>И-мэйл:</strong>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Утасны дугаар:</strong>
                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="phone">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Төрсөн өдөр:</strong>
                    <input type="text" name="birthday" value="{{ $user->birthday }}" class="form-control" placeholder="birthday">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Хүйс:</strong>
                    <select name="gender" class="form-control"  >
                    <!-- <input type="select" name="gender"  value="{{ $user->gender }}" class="form-control" placeholder="gender"> -->
                    <option value="male" selected={{$user->gender==="male" ? 'selected' : ''}}>Эрэгтэй</option>
                    <option value="female" selected={{$user->gender==="female" ? 'selected' : ''}}>Эмэгтэй</option>
                    <option value="undefined" selected={{$user->gender==="undefined" ? 'selected' : ''}}>Тодорхойгүй</option> 
                    <select>
                   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Хэрэглэгчийн төрөл:</strong>
                    <select name="user_type" class="form-control"  >
                    <option value="admin" selected={{$user->user_type==="admin" ? 'selected' : ''}}>Админ</option>
                    <option value="operator" selected={{$user->user_type==="operator" ? 'selected' : ''}}>Оператор</option>
                    <option value="user" selected={{$user->user_type==="user" ? 'selected' : ''}}>Хэрэглэгч</option> 
                    <select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Хотын ID:</strong>
                    <input type="number" name="city_id" value="{{ $user->city_id }}" class="form-control" placeholder="city_id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Дүүргийн ID:</strong>
                    <input type="number" name="district_id" value="{{ $user->district_id }}" class="form-control" placeholder="district_id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Хорооны ID:</strong>
                    <input type="number" name="ward_id" value="{{ $user->ward_id }}" class="form-control" placeholder="ward_id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Хаяг:</strong>
                    <input type="text" name="address" value="{{ $user->address }}" class="form-control" placeholder="address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Идэвхтэй эсэх:</strong>
                    <select name="is_active" class="form-control"  >
                    <option value="true" selected={{$user->is_active==="true" ? 'selected' : ''}}>Идэвхитэй</option>
                    <option value="false" selected={{$user->is_active==="false" ? 'selected' : ''}}>Идэвхигүй</option>
                    <select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Сүүлд нэвтэрсэн хугацаа:</strong>
                    <input type="text" name="last_logined" value="{{ $user->last_logined }}" class="form-control" placeholder="last_logined">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Оруулах</button>
            </div>
        </div>
   
    </form>
@endsection