@extends('layouts.login')
@section('content')

<div class="follow-header">
    <h1>Follower List</h1>
  <div class='icon-list'>
    @foreach($following_user as $image)
    <a href="{{ route('othersProfile',['id'=>$image->id]) }}"><img src="{{asset('storage/'.$image->images)}}"></a>
    @endforeach
  </div>
</div>
<table>
  @foreach($following_post as $value)
<tr class="post-box">
  <td><a href="{{ route('othersProfile',['id'=>$value->user->id]) }}"><img src="{{asset('storage/'.$value->user->images)}}"></a></td>
  <td>{{ $value->user->username}}</td>
  <td>{{ $value->post}}</td>
  <td>{{ $value->created_at}}</td>
  </tr>
  @endforeach
  </table>
  @endsection
