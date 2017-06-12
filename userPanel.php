<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Site For U Dear</title>
<link rel="stylesheet" type="text/css"  href="css/style.css" />
<script src="js/particler.js"></script>

<script src="js/loveCalculator.js"></script>
</head>
<body>

  <?php
session_start();
echo "<p style= 'float: right; margin-right: 35px;'> Welcome <b>". $_SESSION['un']. "</b></p>";

   ?>

   <style>
   #lovecalc {
     padding-top: 20%;
     background-image: image('assets/love.png');
   }
   #rightPanel{
     float: right;
   }
#lovecalc td{font-family:arial,helvetica,sans-serif;font-size:12px;color:#000;}
#coutput{
  width: 40%;
  height: 55%;
}
input {
  color:#FFFFFF;
}
.love {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  position: relative;
  padding: 5px;
  border: none;
  font: normal 12px/1 "Oswald", Helvetica, sans-serif;
  color: #e74c3c;
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  letter-spacing: 12px;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.2) ;
}

.love::after {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  z-index: -1;
  position: absolute;
  content: "LOVE";
  top: 34px;
  left: 28px;
  padding: 20px;
  border: none;
  font: normal 12px/1 "Oswald", Helvetica, sans-serif;
  color: rgba(255,255,255,0.2);
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  letter-spacing: 23px;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.2) ;
  -webkit-transform: rotateX(50deg)   skewX(-30deg);
  transform: rotateX(50deg)   skewX(-30deg);
}
</style>


<table width="500" align="center"  cellpadding="3" id="lovecalc">

<form>
<tr>
	<td align="center">Your Name</td>
	<td align="center"> LOVE CALCULATOR </td>
	<td align="center">Crush Name</td>
<tr>
<tr>
	<td align="center"><input type="text" name="cnameone" size="25" id="cnameone"></td>
	<td align="center"><input type="button" value="CALCULATE" onclick="calc()"></td>
	<td align="center"><input type="text" name="cnametwo" size="25" id="cnametwo"></td>
<tr>
<tr>
	<td align="center" colspan="3"><div id="coutput"></div></td>
<tr>
</form>
</table>
<div id="rightPanel">

<div class="love"><a href="flash.php" target="_self">FLASH SITE</a></div>
</div>
<canvas id="first" class="molecules__wrapper"></canvas>

  <script type="text/javascript">
      var secondParticlerExample = new Particler("first", {
          fillColor: "#00FF96",
          minimalLineLength: 250,
      });
  </script>
</body>
</html>
