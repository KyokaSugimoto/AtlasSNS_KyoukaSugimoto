<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <!--IEブラウザ対策-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="ページの内容を表す文章" />
  <title></title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
  <link rel="stylesheet" href="{{ asset('css/logout.css') }} ">
  <!--スマホ,タブレット対応-->
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <!--サイトのアイコン指定-->
  <link rel="icon" href="{{ asset('images/atlas.png') }}" sizes="16x16" type="image/png" />
  <link rel="icon" href="{{ asset('images/atlas.png') }}" sizes="32x32" type="image/png" />
  <link rel="icon" href="{{ asset('images/atlas.png') }}" sizes="48x48" type="image/png" />
  <link rel="icon" href="{{ asset('images/atlas.png') }}" sizes="62x62" type="image/png" />
  <!--iphoneのアプリアイコン指定-->
  <link rel="apple-touch-icon-precomposed" href="{{ asset('images/atlas.png') }}" />
  <!--OGPタグ/twitterカード-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('js/SNS.js')}}"></script>
</head>
<body>
  <header>
    <h1><a href="/login"><img src="images/atlas.png"></a></h1>
    <p>Social Network Service</p>
  </header>
  <div id="container">
    @yield('content')
  </div>
</body>
</html>
