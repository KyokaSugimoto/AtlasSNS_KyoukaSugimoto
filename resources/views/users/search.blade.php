@extends('layouts.login')

@section('content')

<div class="search-content">
{!! Form::open(['url' => '/search_result', 'method' => 'get']) !!}
@csrf
{{ Form::text('search',null,['class' => 'search-box','placeholder' => '　ユーザー名']) }}
<span class="search-icon">
		<button type="submit" class="btn btn-default">
      <img src="../../../public/images/search.png" alt="ユーザー検索">
    </button>
</span>
{!! Form::close() !!}
</div>

<table>
@foreach($user as $user)
<tr>
  <td>{{ $user->username }}</td>
</tr>
@endforeach
</table>
@endsection
