<!DOCTYPE html>
<html>
<head>
<title>カウントアップ！</title>
</head>
<body>
  <h1 id="counter">
    0
    </h1>
<input type="button"value="ボタン"onclick="countup()">
  <script>
    var cnt =0;
    var countup = function(){
      cnt++;
      console.log(cnt);
      var counter = document.getElementById("counter");
      counter.innerHTML = cnt;

    }
    </script>
</body>
</html>