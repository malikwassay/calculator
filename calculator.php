<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="num1" placeholder="Enter first number"><br><br>
		<input type="text" name="num2" placeholder="Enter second number"><br><br>
		<select name="operator">
			<option value="add">Addition</option>
			<option value="sub">Subtraction</option>
			<option value="mul">Multiplication</option>
			<option value="div">Division</option>
		</select><br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
	<?php
		if(isset($_POST['submit'])){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];
			switch($operator){
				case "add":
					echo "The sum of $num1 and $num2 is " . ($num1+$num2);
					break;
				case "sub":
					echo "The difference between $num1 and $num2 is " . ($num1-$num2);
					break;
				case "mul":
					echo "The product of $num1 and $num2 is " . ($num1*$num2);
					break;
				case "div":
					if($num2 == 0){
						echo "Cannot divide by zero";
					} else {
						echo "The quotient of $num1 and $num2 is " . ($num1/$num2);
					}
					break;
			}
			echo "<br>";
		}
	?>
</body>
</html>
