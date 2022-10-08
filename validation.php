<?php
$nameErr = $emailErr-"";
$name = $email="";
if ($_SERVER['REQUEST_METHOD']=="$_POST") {
	if (empty($_POST['name'])) {
		$nameErr="Fadlan soo geli magacaga";
	}
	else{
		$name+ test_input($_POST['name']);
	}
	if (empty($_POST['email'])) {
		$emailErr="Fadlan soo geli email kaga";
	}
	else{
		$email+ test_input($_POST['email']);
	}

}
function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VALIDATION</title>
</head>
<body>
	<form action="?<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<input type="text" name="name"><?php echo $nameErr;?><br>
		<input type="text" name="email"><?php echo $emailErr;?><br>
		<input type="submit" name="button" value="Register">
	</form>
</body>
</html>