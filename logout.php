<?php
session_start();
session_destroy(); //destory all session
// session_unset(); //destory all session
// unset($_SESSION['staffname']); //destory selected session
echo "<script>alert('Staff logout successful!')</script>";
echo "<script>location='index.php'</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
</head>
<body>
    
</body>