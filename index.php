<?php
if (isset($_POST["name"]) && isset($_POST["age"])) {
	echo "Hello " . $_POST['name'] . "<br />";
	echo "Your age is " . $_POST['age'] . " years old.";
	echo "<form action='index2.php' method='POST'>
 			<input type='hidden' name='name' value='" . $_POST['name'] . "' />
			<input type='hidden' name='age' value='" . $_POST['age'] . "' />
			<input type='submit' value='take test'>
 			</form>";
	exit();
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset=UTF-8" />

	<title>PHP QUIZ | My Project</title>

	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="page-wrap">

		<h1>Enter PHP Quiz Project</h1>

		<form action="" method="POST">
			Name: <input type="text" name="name" />
			Age: <input type="text" name="age" />
			<input type="submit" />
		</form>
		&nbsp;
		&nbsp;
		<p>Develop by Glenn Gonzaga</p>


	</div>
</body>

</html>