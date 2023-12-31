@extends('layouts.logout')

@section('content')

<div id="clear">
  <p>{{ Session('username') }}さん</p>
  <p>ようこそ！AtlasSNSへ！</p>
  <p>ユーザー登録が完了しました。</p>
  <p>早速ログインをしてみましょう。</p>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif

  <p class="btn"><a href="/login">ログイン画面へ</a></p>
</div>

@endsection
