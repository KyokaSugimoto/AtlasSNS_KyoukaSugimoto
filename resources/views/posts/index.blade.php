@extends('layouts.login')

@section('content')
<!-- <h2>機能を実装していきましょう。</h2> -->
<!-- 画像表示練習的なもの -->
<!-- <img src="storage/images/icon1.png"　width="100" height="100"> -->
<!-- <img src="{{ asset('storage/images/icon.png') }}" width="100" height="100"> -->

<div class='create-post'>
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
@foreach($posts as $posts)
<tr class="post-box">
  <td class="post-img"><img src="{{asset($posts->user->images)}}"> </td>
  <td class="post-name">{{ $posts->user->username}}</td>
  <td class="post-comment">{{ $posts->post }}</td>
  <td class="post-date">{{ $posts->created_at }}</td>
<!-- ログインユーザーの投稿には編集ボタンと削除ボタンを表示 -->
@if($posts->user_id==Auth::user()->id)
<!-- 編集ボタン -->
  <td class=edit-icon>
    <a class="edit-icon" href="{{ route('update', ['id'=>$posts->id]) }}" post="{{$posts->post}}" post_id="{{$posts->id}}">
      <button type="submit" id=edit-icon>
        <img src="images/edit.png" alt="編集ボタン">
      </button>
      </a>
  </td>

<!-- 削除ボタン -->
<td class="delete-icon">
  <form action="{{ route('delete', ['id'=>$posts->id]) }}" method="post" >
    @csrf
    <button type="submit">
  <img src="images/trash-h.png" alt="削除ボタン"  onclick="return confirm('この投稿を削除します。よろしいでしょうか？')">
  </button>
</form>
</td>
<!-- 編集モーダル -->
<div class="edit-modal">
<form class="edit-modal modal-form" action="{{ route('update', ['id'=>$posts->id]) }}" method="post" >
        <textarea class="modal-body" type="textarea" name="new-post" value=""></textarea>
          <input type="hidden" name="update_id" class="modal_id" value="">
        <button type="submit" class="edit-modal-icon">更新</button>
        <button class="modal-close">閉じる</button>
      {{ csrf_field()}}
  </form>
  </div>
@else
<td></td>
<td></td>

@endif
</tr>
@endforeach



</table>
@endsection
