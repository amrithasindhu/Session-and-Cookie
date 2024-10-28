<?php
require_once('config.php');

$message="";
if($_SERVER['REQUEST_METHOD']=='POST') {
$username="Amritha";
$password="secret";

$username1=$_POST['username'];
$password1=$_POST['password'];

if($username1===$username && $password1===$password)
{
    $_SESSION['logged_in']=true;
    $_SESSION['username']=$username;

    header("Location:admin.php");
    exit;
}
else{
    $message = "Invalid userbane or password";
}
}
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1> Form</h1>
   <?php if (isset ($message)) :?>
    <P style ="color:red">
    <?php echo $message ?>
</P>
    <?php endif;?>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Enter the Username"><br><br>
        <input type="password" name="password" placeholder="Enter the Username"><br><br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>