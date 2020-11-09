<?php
    
    if(!isset($_POST['Email'])&&!isset($_POST['pwd']))
    header('location:indexloged.html');

$username = $_POST['Email'];
$password = $_POST['pwd'];


if(($username!='admin@admin.sa') || ($password!='admin'))
    header('location:index.php?error=Wrong username or password');
else{

    setcookie('log','yes',time()+(3600*3),'/');
    header('location:indexloged.html');
}
?>