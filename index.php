<!DOCTYPE html>

<html>

<head>

	<title></title>

	<link href="style.css" rel="stylesheet" type="text/css" media ="screen"> 

</head>

<body>

<div id="postalcode-map">

	<map name="map1"> 
		<area alt="Key" shape="RECT" coords="3,3,30,30" href="javascript: press(0);"> 
		<area alt="Key" shape="RECT" coords="33,3,60,30" href="javascript: press(1);"> 
		<area alt="Key" shape="RECT" coords="63,3,90,30" href="javascript: press(2);"> 
		<area alt="Key" shape="RECT" coords="93,3,120,30" href="javascript: press(3);"> 
		<area alt="Key" shape="RECT" coords="123,3,150,30" href="javascript: press(4);"> 
		<area alt="Key" shape="RECT" coords="153,3,180,30" href="javascript: reset();"> 
		<area alt="Key" shape="RECT" coords="3,33,30,60" href="javascript: press(5);"> 
		<area alt="Key" shape="RECT" coords="33,33,60,60" href="javascript: press(6);"> 
		<area alt="Key" shape="RECT" coords="63,33,90,60" href="javascript: press(7);"> 
		<area alt="Key" shape="RECT" coords="93,33,120,60" href="javascript: press(8);"> 
		<area alt="Key" shape="RECT" coords="123,33,150,60" href="javascript: press(9);"> 
		<area alt="Key" shape="RECT" coords="153,33,180,60" href="javascript: backspace();">  
	</map> 
	
	<img src="images/keyboard.png" alt="Keyboard" name="keyboard" usemap="#map1"> 

</div>

<div id="postalcode-display">

	<p class="button">_</p>
	<p class="button">_</p>
	<p class="button">_</p>
	<p class="button">_</p>
	<p class="button">_</p>


</div>

</body>
</html>

<script type="text/javascript" src="screenkbd.js"></script>



