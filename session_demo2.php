<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//accessing session variables that were set on previous page
echo "My University is " . $_SESSION["myuniversity"] . ".<br>";
echo "and I am a " . $_SESSION["status"].".";
?>

</body>
</html>