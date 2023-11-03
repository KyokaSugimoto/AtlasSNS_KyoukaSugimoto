@extends('layouts.login')
@section('content')

<table>
<td><img src="{{asset($user_pro->images)}}"></td>
<td>{{$user_pro->username}}</td>
<td>{{$user_pro->bio}}</td>
@if(auth()->user()->isFollowing($user_pro->id))
  <td><button type="submit"><a class="follow-icon" href="{{ route('stopFollow',['id'=>$user_pro->id]) }}">フォロー解除</a></button></td>
@else
  <td><button type="submit"><a class="stop-icon" href="{{ route('newFollow',['id'=>$user_pro->id])}}">フォローする</a></button></td>
@endif
</table>

<table>
    @foreach($user_post as $value)
<tr class="post-box">
  <td><img src="{{asset($user_pro->images)}}"></td>
  <td>{{$value->user->username}}</td>
  <td>{{$value->post}}</td>
</tr>
  @endforeach
</table>

@endsection
