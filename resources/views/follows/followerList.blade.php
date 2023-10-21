@extends('layouts.login')
@section('content')

<div class="follow-header">
    <h1>Follower List</h1>
  <div class='icon-list'>
    <p>あああああああああああ</p>
      <p>あああああああああああ</p>
      <p>あああああああああああ</p>
      <p>あああああああああああ</p>
  </div>
</div>
<table>
  @foreach($followed_post as $followed)
<tr class="post-box">
  <td class="">{{ $followed->post}}</td>
  </tr>
  @endforeach
  </table>
@endsection
