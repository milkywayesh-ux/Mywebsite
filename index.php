<!DOCTYPE html>

<?php
session_start();
$username = "user";
$password = "password";
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	header("location:loginsucess.php");
}
if(isset($_POST['username']) && isset($_POST['password']))
	{
	if($_POST['username'] == $username && $_POST['password'] == $password)
		{
		$_SESSION['loggedin'] = true;
	}
	else{
		echo "Username or password is incorrect";
	}
}
?>

<html>
<body>

<?php
echo readfile("carinfo.txt");
?>

<?php
$infile = fopen("carinfo.txt", "r") or die("Unable to open file!");
while(!feof($infile)){
	echo fgets($infile). "<br>";
}
fclose($infile);
?>

<form method ="post" action = "index.php">
	username:<br>
	<input type = "text" name ="username"><br>
	password:<br>
	<input type = "text" name = "password"><br>
	<input type = "submit" value = "Login">
</form>


</body>
</html>



/*<?php
	function factorial($n)
	{
		if($n== 1){
			return $n;
		}
		else{
			return $n * factorial($n-1);
		}
	}
	echo factorial(5);
	echo "<br>";

	$num = 20;

	function demo(){
		global $num;
		echo "Value of num inside the function $num<br>";
}
	echo "Welcome to PHP Programming";
?>*/


