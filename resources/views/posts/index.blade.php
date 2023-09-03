@extends('layouts.login')

@section('content')
<!-- <h2>機能を実装していきましょう。</h2> -->

<div class='create-post'>
  {{Auth::user()->images }}
{!! Form::open(['url' => '/top']) !!}
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
  <td class="post-date">{{ $post->created_at }}</td>
<!-- ログインユーザーの投稿には編集ボタンと削除ボタンを表示 -->
@if($post->user_id==Auth::user()->id)
<!-- 編集ボタン -->
  <td class=edit-icon>
    <a class="edit-icon" href="{{ route('update', ['id'=>$post->id]) }}" post="{{$post->post}}" post_id="{{$post->id}}">
      <button type="submit" id=edit-icon>
        <img src="images/edit.png" alt="編集ボタン">
      </button>
      </a>
  </td>

<!-- 削除ボタン -->
<td class="delete-icon">
  <form action="{{ route('delete', ['id'=>$post->id]) }}" method="post" >
    @csrf
    <button type="submit">
  <img src="images/trash-h.png" alt="削除ボタン"  onclick="return confirm('この投稿を削除します。よろしいでしょうか？')">
  </button>
</form>
</td>
@else
<td></td>
<td></td>
@endif
</tr>
@endforeach

<div class="edit-modal">
<form class="edit-modal modal-form" action="{{ route('update', ['id'=>$post->id]) }}" method="post" >
        <textarea class="modal-body" type="textarea" name="new-post" value=""></textarea>
          <input type="hidden" name="update_id" class="modal_id" value="">
        <button type="submit" class="edit-modal-icon">更新</button>
        <button class="modal-close">閉じる</button>
      {{ csrf_field()}}
  </form>
  </div>

</table>
@endsection
