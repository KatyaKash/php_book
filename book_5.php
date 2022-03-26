<?php
if (isset($_POST['a'])&&isset($_POST['b'])&&isset($_POST['c'])){
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$D = $b*$b-4*$a*$c;
		if ($D > 0) {
			$x1 = (-$b+sqrt($D))/(2*$a);
			$x2 = (-$b-sqrt($D))/(2*$a);
			print_r('<p>'.$x1.' '.$x2.'<p>');
		}
		else if ($D == 0) {
			$x = -$b/(2*$a);
			print_r('<p>'.$x.'<p>');
		}
		else {
			print_r('Корней нет');
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="a" placeholder="введите коэффициент а...">
		<input type="text" name="b" placeholder="введите коэффициент b...">
		<input type="text" name="c" placeholder="введите коэффициент c...">
		<input type="submit" value="получите свои корни уравнения">
	</form>
</body>
</html>
