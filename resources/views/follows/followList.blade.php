@extends('layouts.login')
@section('content')
<div class="follow-header">
    <h1>Follow List</h1>
    <div class='icon-list'>
      <p>あああああああああああ</p>
      <p>あああああああああああ</p>
      <p>あああああああああああ</p>
      <p>あああああああああああ</p>
  </div>
</div>

<table>
  @foreach($following_post as $value)
<tr class="post-box">
  <td><a href="">{{ $value->user->images}}</a></td>
  <td>{{ $value->user->username}}</td>
  <td>{{ $value->post}}</td>
  <td>{{ $value->created_at}}</td>
  </tr>
  @endforeach
  </table>
@endsection
