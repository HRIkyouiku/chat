<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <title>Chat</title>
</head>

<body>
  <h1>チャットボット</h1>

  <!--画面-->
  <div id="chatField">
    <ul id="chat-ul"></ul>
  </div>

  <!--入力場所，送信ボタン-->
  <div id="input-field">
    <input type="text" id="chat-input">
    <input type="button" value="Send" id="chat-button" onclick="btnFunc()">
  </div>
  <script src="{{ asset('/js/chat.js') }}"></script>
</body>
<!-- test -->

</html>
