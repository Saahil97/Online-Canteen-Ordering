<!DOCTYPE html>
<html>
	<head>
		<style>
			.mainttl {
				float:left;
				/*margin-top:15%;
				margin-left:25%;*/
				width:60%;
				padding:0 20px;
			}
		</style>
	<body>
		<?php
			$name = array();
			$price = array();
			$i = 0;
			$x = 0;
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
			if(isset($_POST["StuffedShimlaMirch"]))
			{
				$x = 1;
				$str = $_POST["StuffedShimlaMirch"];
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
			if(isset($_POST["KashmiriDumAloo"]))
			{
				$x = 1;
				$str = $_POST["KashmiriDumAloo"];
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
			if(isset($_POST["TavaPulao"]))
			{
				$x = 1;
				$str = $_POST["TavaPulao"];
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
			if(isset($_POST["NorthIndianThali"]))
			{
				$x = 1;
				$str = $_POST["NorthIndianThali"];
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
			if(isset($_POST["RajmaChawal"]))
			{
				$x = 1;
				$str = $_POST["RajmaChawal"];
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
			if(isset($_POST["CholeBature"]))
			{
				$x = 1;
				$str = $_POST["CholeBature"];
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
			if($x == 0	)
			{		
				echo "no orders";
			}
			/**foreach($arr as $x => $x_value) {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";**/

		?> 
		<div class="maintl">
			Your orders
		</div>
		<table border="0px">
			<tr>
				<td><?php $x=0; echo $name[$x]; ?></td>
				<td><?php  echo $price[$x]; $x = $x +1; ?></td>
			</tr>
			<tr>
				<td><?php  echo $name[$x]; ?></td>
				<td><?php  echo $price[$x]; $x = $x +1; ?></td>
			</tr>
			<tr>
				<td><?php  echo $name[$x]; ?></td>
				<td><?php  echo $price[$x]; $x = $x +1; ?></td>
			</tr>
			<tr>
				<td><?php  echo $name[$x]; ?></td>
				<td><?php  echo $price[$x]; $x = $x +1; ?></td>
			</tr>
			<tr>
				<td><?php  echo $name[$x]; ?></td>
				<td><?php  echo $price[$x]; $x = $x +1; ?></td>
			</tr>
			<tr>
				<td><?php  echo $name[$x]; ?></td>
				<td><?php  echo $price[$x]; $x = $x +1; ?></td>
			</tr>
			<tr>
				<td><?php  echo $name[$x]; ?></td>
				<td><?php  echo $price[$x]; $x = $x +1; ?></td>
			</tr>
		</table>

	</body>
</html>