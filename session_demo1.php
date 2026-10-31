<?php
//start a session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["myuniversity"] = "Rutgers";
$_SESSION["status"] = "Junior";
echo "Session variables are set.";
?>

</body>
</html>
