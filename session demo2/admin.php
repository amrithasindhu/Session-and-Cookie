<?php

require_once('config.php');
if(isset($_SESSION["logged_in"]) !==true)
{
    header("Location:login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1> Welcome <?php echo $_SESSION['username'] ?></h1>
    <a href="logout.php">LogOut</a>
</body>
</html>
<?php


?>