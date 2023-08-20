@extends('layouts.login')

@section('content')
<!-- <h2>機能を実装していきましょう。</h2> -->

<div class='create-post'>
  {{Auth::user()->images }}
X{!! Form::open(['url' => '/top']) !!}
<input class="text" type="text" name="tweet"placeholder="　投稿内容を入力してください" maxlength="150" minlength="1" required>
<span class="send-icon">
		<button type="submit" class="btn btn-default">
    <img src="images/post.png" alt="投稿ボタン">
    </button>
</span>
{!! Form::close() !!}
</div>
<table class="post">
@foreach($post as $post)
<tr class="post-box">
  <td class="post-img">{{$post->user->images}} </td>
  <td class="post-name">{{ $post->user->username}}</td>
  <td class="post-comment">{{ $post->post }}</td>

@if($post->user_id==Auth::user()->id)
  <td class=edit-icon>
   <img src="images/edit.png" onclick=""alt="編集ボタン">
</td>
<!-- <div class="edit-modal">
  <input class="edit-content" type="textarea" value="">
</div> -->
<td class="delete-icon">
  <form action="{{ route('delete', ['id'=>$post->id])}}" method="post" >
    @csrf
    <button type="submit">
  <img src="images/trash-h.png" alt="削除ボタン" type="submit"  onclick="return confirm('この投稿を削除します。よろしいでしょうか？')">
  </button>
  </form>
</td>
</tr>
@else
<td></td>
<td></td>
@endif

 @endforeach

</table>

@endsection
