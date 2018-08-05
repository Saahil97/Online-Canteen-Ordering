<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PRESIDENCY CANTEEN</title>
		<link rel="icon" href="img/title.png" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
			
			ul {
    list-style-type: none;
    margin: 0;
	padding: 0;
	/*width: 100%;
	margin-top: 10%;
	top: 0px;
	position: fixed;*/
    overflow: hidden;
    background-color: #ff6347;
}

.bottom{
			background-color:grey;
			padding-left:40;
			padding-right:40;
			padding-right:0px;
			padding-bottom:10px;
			padding-top:10px;
			
			}
.button31 {
    background-color: white; 
    color: lightblue; 
    border: 2px solid #f44336;
}

.button31:hover {
    background-color: #f44336;
    color: white;
}

.button51 {
    background-color: white;
    color: lightblue;
    border: 2px solid #555555;
}

.button51:hover {
    background-color: #555555;
    color: white;
}
.button21 {
    background-color: white; 
    color: lightyellow; 
    border: 2px solid #008CBA;
}

.button21:hover {
    background-color: #008CBA;
    color: white;
}
li {
    float: left;
	font-size : 15px; 
	font-variant : small-caps;
	font-family : Arial, Helvetica, sans-serif;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #ff5233;
	box-shadow:0 10px 10px 0 rgba(0,0,0,0.4),0 20px 20px 0 rgba(0,0,0,0.4) ;
}
.mySlides {display:none;}
body{
				font-family:Verdana;
				background-image: url("img/bgcover.png");
			}
.img{
	height: 300px;
    width: 550px;
	display: block;
}
.animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
.content{max-width:980px;margin:auto}.w3-rest{overflow:hidden}
.section{margin-top:16px!important;margin-bottom:16px!important}

.box{
    width: 300px;
	max-height:10px;
    border: 3px solid gray;
    margin: 55px;
	padding: 25px;
}
.name{
color:#FFFFFF;
 font-size: 50px;
 font-family:"Monospace";
}
.container {
    position: relative;
    width: 50%;
	
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .8s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
  box-shadow:4px 4px 10px 4px rgba(0,0,0,0.4),4px 4px 20px 4px rgba(0,0,0,0.4)
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: TOMATO;
  color: white;
  font-size: 16px;
  padding: 16px 16px;
}
div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}
.ncontainer {
    position: relative;
}

.ncenter {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 28px;
	font-family: courier;
}
table{
align:center;
font-family : Arial, Helvetica, sans-serif;
height:100px;
width:300px;
border-color:tomato;
background-color:white;
margin:auto;
}
td{
border:none;
font-family : Arial, Helvetica, sans-serif;
padding-left:20px;
padding-right:10px;}
th{
border:none;
font-family : Arial, Helvetica, sans-serif;
padding-left:5px;
padding-right:4px;}
.sub{
	background-color:turquoise;
	border-radius:3px;
	padding:4px;
	border:none;
	align:center;
	padding: 10px 30px;
	font-family : Arial, Helvetica, sans-serif;
}
.sub:hover{
	background-color:tomato;
 	box-shadow:5px 4px 10px 0 rgba(0,0,0,0.2),5px 4px 20px 0 rgba(0,0,0,0.19);
}
</style>
</head>

<body>
<div class="ncontainer">
  <img style="opacity:" src="../img/presi.jpg"" alt="Main Image" width="100%" height="400" />
  <div class="ncenter"></div>
</div>

<ul style="overflow:auto;border-radius: 4px;">
  <li><a class="active" href="../../canteen/menu.html">Home</a></li>
  <li><a href="../../canteen/contact/contact.html">Contact</a></li>
  <li><a href="../../canteen/About_Us/About.html">About</a></li>
</ul>
<?php
$name = array();
$price = array();
$i = 0;
$x = 0;
if(isset($_POST["Munchurian"]))
{
	$x = 1;
	$str = $_POST["Munchurian"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Noodles"]))
{
	$x = 1;
	$str = $_POST["Noodles"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Soup"]))
{
	$x = 1;
	$str = $_POST["Soup"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Fried_Rice"]))
{
	$x = 1;
	$str = $_POST["Fried_Rice"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Rolls"]))
{
	$x = 1;
	$str = $_POST["Rolls"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Momos"]))
{
	$x = 1;
	$str = $_POST["Momos"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Chive_Dumpling"]))
{
	$x = 1;
	$str = $_POST["Chive_Dumpling"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Lemongrass_Noodles_With_Meatballs"]))
{
	$x = 1;
	$str = $_POST["Lemongrass_Noodles_With_Meatballs"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Veg_Fried_Buns"]))
{
	$x = 1;
	$str = $_POST["Veg_Fried_Buns"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Fried_Vegetable_Wraps"]))
{
	$x = 1;
	$str = $_POST["Fried_Vegetable_Wraps"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Tofu"]))
{
	$x = 1;
	$str = $_POST["Tofu"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["King_Prawn_Fry"]))
{
	$x = 1;
	$str = $_POST["King_Prawn_Fry"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Chicken_Lollipop"]))
{
	$x = 1;
	$str = $_POST["Chicken_Lollipop"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Black_Pepper_Chicken"]))
{
	$x = 1;
	$str = $_POST["Black_Pepper_Chicken"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Chilli_Chicken"]))
{
	$x = 1;
	$str = $_POST["Chilli_Chicken"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Harira_Lentil_With_Soup"]))
{
	$x = 1;
	$str = $_POST["Harira_Lentil_With_Soup"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Shrimp_Laksa_With_Noodles"]))
{
	$x = 1;
	$str = $_POST["Shrimp_Laksa_With_Noodles"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}

if(isset($_POST["Rigatoni"]))
{
	$x = 1;
	$str = $_POST["Rigatoni"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["PavBhaji"]))
			{
				$x = 1;
				$str = $_POST["PavBhaji"];
				//echo $str;
				$tok = strtok($str , " ");
				//echo "Outside while : " .$tok;
				while($tok != false)
				{
					$name[$i] = $tok;
					//echo "Within while before tok : " .$tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					//echo "Within while after tok : " .$tok;
					$tok = strtok(" ");
					//echo "Within while last tok : " .$tok;
					$i = $i +1;
				}
			}
			if(isset($_POST["Paneer"]))
			{
				$x = 1;
				$str = $_POST["Paneer"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Dhokla"]))
			{
				$x = 1;
				$str = $_POST["Dhokla"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Stuffed_Shimla_Mirch"]))
			{
				$x = 1;
				$str = $_POST["Stuffed_Shimla_Mirch"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Kashmiri_Dum_Aloo"]))
			{
				$x = 1;
				$str = $_POST["Kashmiri_Dum_Aloo"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Tava_Pulao"]))
			{
				$x = 1;
				$str = $_POST["Tava_Pulao"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["North_Indian_Thali"]))
			{
				$x = 1;
				$str = $_POST["North_Indian_Thali"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Rajma_Chawal"]))
			{
				$x = 1;
				$str = $_POST["Rajma_Chawal"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Chole_Bature"]))
			{
				$x = 1;
				$str = $_POST["Chole_Bature"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Samosa"]))
			{
				$x = 1;
				$str = $_POST["Samosa"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
if(isset($_POST["PlainDosa"]))
{
	$x = 1;
	$str = $_POST["PlainDosa"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Poori"]))
{
	$x = 1;
	$str = $_POST["Poori"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Idli"]))
{
	$x = 1;
	$str = $_POST["Idli"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["MasalaDosa"]))
{
	$x = 1;
	$str = $_POST["MasalaDosa"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Puliogare"]))
{
	$x = 1;
	$str = $_POST["Puliogare"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Vada"]))
{
	$x = 1;
	$str = $_POST["Vada"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["KesariBath"]))
{
	$x = 1;
	$str = $_POST["KesariBath"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["RavaIdli"]))
{
	$x = 1;
	$str = $_POST["RavaIdli"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["KeralaParota"]))
{
	$x = 1;
	$str = $_POST["KeralaParota"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
if(isset($_POST["Upma"]))
{
	$x = 1;
	$str = $_POST["Upma"];
	//echo $str;
	$tok = strtok($str , " ");
	while($tok != false)
	{
		$name[$i] = $tok;
		$tok = strtok(" ");
     	$price[$i] = $tok;
		$tok = strtok(" ");
		$i = $i +1;
	}
}
			if(isset($_POST["Brownie"]))
			{
				$x = 1;
				$str = $_POST["Brownie"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Coffee"]))
			{
				$x = 1;
				$str = $_POST["Coffee"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Tea"]))
			{
				$x = 1;
				$str = $_POST["Tea"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Milkshake"]))
			{
				$x = 1;
				$str = $_POST["Milkshake"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Cake"]))
			{
				$x = 1;
				$str = $_POST["Cake"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Badam_Milk"]))
			{
				$x = 1;
				$str = $_POST["Badam_Milk"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
			if(isset($_POST["Sundae"]))
			{
				$x = 1;
				$str = $_POST["Sundae"];
				//echo $str;
				$tok = strtok($str , " ");
				while($tok != false)
				{
					$name[$i] = $tok;
					$tok = strtok(" ");
					$price[$i] = $tok;
					$tok = strtok(" ");
					$i = $i +1;
				}
			}
if($x == 0	)
{
	echo "no orders";
}

?> 
<?php $x=0;$sum=0;$gst=0;$total=0; ?>

<pre><br /><br /><br /><br /><br /></pre>
<?php
	$read_str="";
	$tok2="";
	$read_str=file_get_contents("test.txt");
	$file = fopen("test.txt", "r+");
	$tok2 = strtok($read_str ,"+");
	//echo "file contents : ".$read_str."\r\n";
	//echo $tok2;
	$stop=1;
	ini_set('memory_limit', '-1');
	while($stop)
	{
		if($tok2=="%%")
		{
			$stop=0;
			break;
		}
		//echo $tok2;
		array_push($name,$tok2);
		$tok2=strtok("+");
		$pr=(int)$tok2;
		array_push($price,$pr);
		$tok2=strtok("+");
	}
	fclose($file);
?>
<table border=1>
<tr>
<td><h3>ITEMS</h3></td>
<td><h3>PRICE</h3></td>
</tr>

<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<tr>
<td><?php if($x < count($name)){ echo $name[$x];} ?></td>
<td><?php if($x < count($name)){ echo $price[$x]; $sum = $sum + $price[$x]; $x = $x +1;} ?></td>
</tr>
<?php $gst = $sum * 0.28; $total = $sum + $gst; ?>
<tr>
<td><b>SUM</b></td>
<td><b><?php echo $sum; ?></b></td>
</tr>
<tr>
<td><b>GST</b></td>
<td><b><?php echo $gst; ?></b></td>
</tr>
<tr>
<td><pre><br /></pre></td>
<td><pre><br /></pre></td>
</tr>
<tr>
<td><h3><b>TOTAL</b></h3></td>
<td><h3><b><?php echo $total; ?></b></h3></td>
</tr>
</table>

<pre><center><a href="order_success.html"><button onclick="con()" class="sub">Continue with Order</button></pre></center>
<pre><br /><br /><br /></pre>
<pre><br /><br /><br /></pre>
<div class="bottom" style="background-color:#737373;color:white;">© presidency university.in</div>

<script>
function al()
{
	var c = confirm("Are you sure you want to proceed?");
	if(c == true)
	{
		<?php
			$fp = fopen("test.txt", "w");
			fwrite($fp,"");
			file_put_contents("test.txt","+%%");
	fclose($fp);
	
			rewind($fp);
			$clr="%%+";
			echo "End";
			
			
			
		?>
	}
	alert("Order taken.It will be delivered soon!!");
}
function con() {
	<?php
	$str="%%+";
	file_put_contents($str,"test.txt");

 ?>
}
</script>
</body>
</html>