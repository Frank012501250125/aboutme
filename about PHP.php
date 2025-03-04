<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>陳冠甫簡介</title>
    <style type="text/css">

* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}

h1 {color:blue; font-size:60px;}

h2 {color:#33ff33; font-size:40px;}

</style>
<script>
function change1() {
document.getElementById("pic").src = "mountain.jpg";
document.getElementById("h2text").innerText = "靜宜資管";
}
function change2() {
document.getElementById("pic").src = "cliff.jpg";
document.getElementById("h2text").innerText = "Chen Kuan Fu";
}

</script>
</head>
<body>
	<table width="70%">
<tr>
<td>
<img src="cliff.jpg" width="110%"
id="pic"
onmouseover="change1()" onmouseout="change2()">
</img>
</td>
<td>
	<h1>陳冠甫</h1>
    <h2 id="h2text">Chen Kuan Fu</h2>
</td>
</tr>
</table>
    <table width="70%" border="1">
<tr>
<td>
    靜宜網頁：<a href="https://www.pu.edu.tw">https://www.pu.edu.tw/</a><br>
    FB：<a href="https://www.facebook.com/share/1Ejnu2yi7C/?mibextid=wwXIfr"
    target=" blank">https://www.facebook.com/share/1Ejnu2yi7C/?mibextid=wwXIfr</a><br>
    Tel:<a href="tel:0426328001,18110">04-26328001#18110</a><br>
    E-Mail:<a href="malito:a0966078020@gmail.com">a0966078020@gmail.com</a><br>
    </td>

<td>
大象席地而坐電影配樂<br>
<audio controls>
<source src="elephant.mp3" type="audio/mP3">
</audio><br>
</td>
<td>
不要去臺灣<br>
<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
</td>
<td>
	聊天機器人:<a href="https://bot.dialogflow.com/54aff29b-25e1-474f-a365-bb7a3417d998">https://bot.dialogflow.com/54aff29b-25e1-474f-a365-bb7a3417d998
</td>
</table>
<?php echo date("Y-m-d") ?>
</body>
</html>