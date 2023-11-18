@extends('layouts.login')
@section('content')
<form class="edit-pro" action="{{ route('editPro')}}" method="POST" enctype='multipart/form-data' file="true">
  @csrf
<div class="edit-pro-form">
  <!-- ↓ 別になくてよい -->
  <div>{{Auth::user()->id}}</div>
  <div class="user-icon"><img src="{{asset($user_info->images)}}"></div>

    <label>user name</label>
      <input name="username" value="{{ $user_info->username}}" required>

    <label>mail address</label>
      <input name="mail" value="{{ $user_info->mail}}" required>

    <label>password</label>
      <input name="password" type="password" value="{{ $user_info->password}}" required>

    <label>password confirm</label>
      <input name="password_confirmation" type="password" value="{{ $user_info->password}}"required>

    <label>bio</label>
      <input name="bio" value="{{ $user_info->bio}}" >

    <label>icon image</label>
    <input name="icon" type="file" accept=".jpg,.png,.bmp,.gif,.svg" placeholder="">

    <input name="id" type="hidden" value="{{Auth::user()->id}}">

  <button type="submit">更新</button>
</div>

</form>
@if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif


@endsection
