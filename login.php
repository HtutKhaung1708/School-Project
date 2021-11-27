<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blink site/Log In</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e0bab58c31.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script>
        window.onscroll = function() {myFunction()};

            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;

            function myFunction() {
            if (window.pageYOffset >= sticky) 
            {
                navbar.classList.add("sticky")
            } 
            else 
            {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    
    <?php
        session_start();
        $connect = mysqli_connect("localhost","root","","blink_site");
        if (isset($_POST['submit'])) 
        {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $selectaccount = "SELECT * FROM signup where Email = '$email' And Password = '$password'";
        $run = mysqli_query($connect,$selectaccount);
        $count = mysqli_num_rows($run);
            if ($count > 0) 
            {
                $data = mysqli_fetch_array($run);
                $_SESSION['name'] = $data['Name'];
                $_SESSION['email'] = $data['Email']; 

                echo "<script>alert('log in successful')</script>";
                echo "<script>location='index.php'</script>";
            }
            else 
            {
                echo "<script>alert('Email or Password may be wrong.Try Again!')</script>";
                echo "<script>location='index.php'</script>";
            }
}
?>

</head>
<body>
        <div id="navbar">
            <a href="index.php"><img src="images/logo.png" height="42px" width="42px" id="logo"><h3 id="name">Blink Site</h3></a>
            <a href="login.php" class="a"><i class="fas fa-sign-in-alt"></i> Log In</a>
            <a href="translate.php" class="a"><i class="fas fa-language"></i> Translate</a>
            <a href="logout.php" class="a"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        

            <div class="search" >
                <input type="text" placeholder="Search Anything" id="search1">
                <button id="search2"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="banner">
            <img src="images/banner.jpg" id="mainjpg"><br><br>
        </div>

    <div>
        <form action="" method="post">
            <h1 style="color: pink; text-align: center; margin-top: 20px;">Log In Form</h1>

            <table id="table">
                <tr>
                    <td style="color: pink; font-size: 20px;">Email: </td>
                    <td><input type="email" name="email" id="email" placeholder="example: htut170808@gmail.com" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">Password: </td>
                    <td><input type="password" name="password" id="password" placeholder="example: ******" required></td>
                </tr><br>

                <tr>
                    <td><input type="submit" name="submit" value="Log In" id="submit"></td>
                </tr>
            </table>
        </form>
    </div><br><hr><br><br>

    <div id="bottom">
        <h1 style="text-align: center;" id="bottom-text">Created by Htut Khaung (professional web developer)</h1>
    </div>
</body>
</html>