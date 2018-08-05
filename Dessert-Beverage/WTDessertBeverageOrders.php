<!DOCTYPE html>
<html>
	<body>
		<?php
			$name = array();
			$price = array();
			$i = 0;
			$x = 0;
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
			if(isset($_POST["BadamMilk"]))
			{
				$x = 1;
				$str = $_POST["BadamMilk"];
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
			/**foreach($arr as $x => $x_value) {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";**/

		?> 

		<table border="1px">
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