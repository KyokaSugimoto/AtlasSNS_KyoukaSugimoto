@extends('layouts.login')

@section('content')

<div class="search-content">
{!! Form::open(['url' => '/search_result']) !!}
@csrf
{{ Form::text('search',null,['class' => 'search-box','placeholder' => '　ユーザー名']) }}
<span class="search-icon">
		<button type="submit" class="btn btn-default">
      <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg>
    </button>
</span>
{!! Form::close() !!}

<h2>検索ワード：{{ Session('keyword')}}</h2>

</div>

<table>
@foreach($result as $user)
<tr>
  <td>{{ $user->username }}</td>
@if(auth()->user()->isFollowing($user->id))
  <td><button type="submit"><a class="follow-icon" href="{{ route('stopFollow',['id'=>$user->id]) }}">フォロー解除</a></button></td>
@else
  <td><button type="submit"><a class="stop-icon" href="{{ route('newFollow',['id'=>$user->id])}}">フォローする</a></button></td>
</tr>
@endif
@endforeach

</table>
@endsection
