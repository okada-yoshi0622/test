<!DOCTYPE html>
<html>
<head>
<title>カウントアップ！</title>
</head>
<body>
  <image src="img/neko.jpg">
  <h1 id="counter">
    0
    </h1>
<input type="button"value="テスト"onclick="countup()">
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