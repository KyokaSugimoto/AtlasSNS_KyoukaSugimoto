@extends('layouts.login')
@section('content')
<form class="edit-pro" action="{{ route('editPro',['id'=>$user_info->id] )}}" method="post">
  @csrf
<table class="edit-pro-form">
  <tr>
    <th class="user-icon">あいこん</th>
    <th><label>user name</label></th>
    <td><input name="username" value="{{ $user_info->username}}" required></td>
  </tr>
  <tr>
    <th></th><th><label>mail address</label></th>
    <td><input name="mail" value="{{ $user_info->mail}}" required></td>
  </tr>
  <tr>
    <!-- <th></th><th><label>password</label></th>
    <td><input name="password" type="password" value="" required></td>
  </tr>
  <tr>
    <th></th><th><label>password confirm</label></th>
    <td><input name="password-confirmation" type="password"required></td>
  </tr>
  <tr>
    <th></th><th><label>bio</label></th>
    <td><input name="bio" value="{{ $user_info->bio}}" ></td>
  </tr>
  <tr>
    <th></th><th><label>icon image</label></th>
    <td><input name="icon-image" type="file" accept=".jpg,.png,.bmp,.gif,.svg" placeholder=""></td>
  </tr> -->
  <tr>
    <input type="hidden" value="{{Auth::user()->id}}">
  <th><button type="submit">更新</button></th>
  </tr>
</table>
</form>
@endsection
