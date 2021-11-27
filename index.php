<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blink site</title>
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
$connect = mysqli_connect('localhost','root','','blink_site');
if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bias = $_POST['bias'];

    $checkemail = "select * from signup where Email = '$email'";
    $runemail = mysqli_query($connect,$checkemail);
    $countemail = mysqli_num_rows($runemail);

    if($countemail == 0)
    {

        $connect = mysqli_connect('localhost','root','','blink_site');
        $staffinsert = "Insert into signup (Name,Email,Password,Bias) values('$name','$email','$password','$bias')";

        $run = mysqli_query($connect,$staffinsert);
        if ($run) 
        {
            echo "<script>alert('Staff Register Successful!')</script>";
            echo "<script>location='index.php'</script>";
        }
        else 
        {
            echo "<script>alert('Something went wrong. Pls try again!.')</script>";
            echo "<script>location='index.php'</script>";
        }
    }

    else
    {
        echo "<script>alert('Account already exist, try using another account')</script>";
        echo "<script>location='StaffSignUp.php'</script>";
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
        <img src="images/banner2.jpg" id="mainjpg"><br><br>
        <div class="banner-texts">
            <h1 align="center" style="color: pink;" id="header">Blackpink</h1><br><br>
            <p id="texts">Blackpink (Korean: 블랙핑크; commonly stylized as BLACKPINK or BLΛƆKPIИK) is a South Korean girl group formed by YG Entertainment, consisting of members Jisoo, Jennie, Rosé, and Lisa. The group debuted in August 2016 with their single album Square One, which featured "Whistle" and "Boombayah", their first number-one entries on South Korea's Gaon Digital Chart and the Billboard World Digital Song Sales chart, respectively.

                Blackpink is the highest-charting female Korean act on the Billboard Hot 100, peaking at number 13 with "Ice Cream" (2020), and on the Billboard 200, peaking at number two with The Album (2020), which is also the first-ever album by a Korean girl group to sell more than one million copies.[1] They were the first Korean girl group to enter and top Billboard's Emerging Artists chart and to top the Billboard World Digital Song Sales chart three times.[2] Blackpink was also the first female Korean act to receive a certification from the Recording Industry Association of America (RIAA) with their hit single "Ddu-Du Ddu-Du" (2018), whose music video is currently the most-viewed by a Korean group on YouTube.[3] Their 2018 song "Kiss and Make Up", a collaboration with Dua Lipa, was the first by a Korean group to receive a certification from the British Phonographic Industry (BPI)[4] and a platinum certification from the Australian Recording Industry Association (ARIA).[5]
                
                Blackpink has broken numerous online records throughout their career. Their music videos for "Kill This Love" (2019) and "How You Like That" (2020) each set records for the most-viewed music video within the first 24 hours of release, with the latter breaking three and setting two Guinness World Records.[6] They are the first music group and Korean female act to have five music videos accumulate one billion views each on YouTube;[7] the most-subscribed music act on the platform; and the most-followed girl group on Spotify, with over 20 million followers as of March 2021.[8] Their other accolades include the New Artist of the Year Award at the 31st Golden Disc Awards and the 26th Seoul Music Awards, the Mnet Asian Music Award for Best Female Group in 2020, the first MTV Music Video Award won by a Korean girl group,[9] and recognition as the first female Korean group on Forbes' 30 Under 30 Asia.[10] They have been recognized by Forbes Korea as one of the most powerful celebrities in South Korea, placing first in 2019, third in 2020, and second in 2021.[11] In January 2021, Blackpink was credited by South Korea's President Moon Jae-in for spreading K-pop content across the globe and acknowledged them as a global K-pop phenomenon</p>
        </div>
    </div><br><hr><br>

    <div class="about">
        <h1 style="color: pink;" align="center">About</h1>
        <h2 style="color: pink;" align="center" id="members">Click on the images to know about each members</h2><br><br>
        <a href="https://www.google.com/search?q=lisa&oq=lisa&aqs=chrome.0.69i59j35i39i362l3j69i59l3j0i271l3.427j0j15&sourceid=chrome&ie=UTF-8" target="_blank">
            <img src="images/lisa.jpg" id="lisa">
        </a>

        <a href="https://www.google.com/search?q=jennie&sxsrf=AOaemvK1Mcr6JOeRWbCuDGDM2mskRGk3aA%3A1637937753811&ei=WfKgYab2MM2F4t4PhLmRkAo&ved=0ah" target="_blank">
            <img src="images/jennie.jpg" id="jennie">
        </a>

        <a href="https://www.google.com/search?q=rose+blackpink&sxsrf=AOaemvKn0LenhbDp5JujGrmpi9au5YyR3A%3A1637937789354&ei=ffKgYe7-FKfB3LUP0amqwA8&ved=0ahUKEwiuseTgobb0AhWnILcAHdGUCvgQ4dUDCA4&uact=5&oq=rose+blackpink&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBwguELEDEEMyBAgAEEMyBAgAEEMyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQ6BwgjELADECc6BwgAEEcQsAM6CgguEMgDELADEEM6CgguELEDEIMBEEM6BAguEENKBQg4EgExSgQIQRgAUMIBWNYUYJ0YaAFwAngBgAGFAogBmAySAQUwLjkuMZgBAKABAcgBD8ABAQ&sclient=gws-wiz" target="_blank">
            <img src="images/rose.jpg" id="rose">
        </a>

        <a href="https://www.google.com/search?q=jisoo&sxsrf=AOaemvIOmjgn5gNYeSf0mXePkBHuZT7L6Q%3A1637937801390&ei=ifKgYbWgF9zZz7sPgIiFsAc&ved=0ahUKEwj1iMPmobb0AhXc7HMBHQBEAXYQ4dUDCA4&uact=5&oq=jisoo&gs_lcp=Cgdnd3Mtd2l6EAMyBAguECcyBAgAEEMyBAgAEEMyBAgAEEMyCggAEIAEEIcCEBQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDoHCCMQ6gIQJzoECCMQJzoHCC4QsQMQQzoECC4QQzoKCAAQsQMQgwEQQ0oECEEYAFAAWL4HYKoJaAFwAngAgAH7AYgB1waSAQUwLjMuMpgBAKABAbABCsABAQ&sclient=gws-wiz" target="_blank">
            <img src="images/jisoo.jpg" id="jisoo">
        </a>
    </div><br><hr><br>

    <div class="streaming">
        <h1 style="color: pink;" align="center" id="stream">Join Our Fandom's streaming party</h1><br><br>
        <a href="https://www.youtube.com/results?search_query=how+you+like+that" class="links" target="_blank">Stream how you like that to 1.1 billion views</a><br><br>

        <a href="https://www.youtube.com/results?search_query=kill+this+love" class="links" target="_blank">Stream Kill This Love to 1.5 billion views</a><br><br>

        <a href="https://www.youtube.com/watch?v=awkkyBH2zEo" class="links" target="_blank">Stream Lalisa to 400 million views</a><br><br>
    </div><br><br>

    <div class="voting">
        <h1 style="color: pink;" align="center" id="voting">Vote Lisa and Rosé on Mama music award 2021</h1><br>
        <a href="https://mama.mwave.me/en/main" id="link" target="_blank">Click here to vote</a><br><br>
    </div><br><br>
    </div>

    <div class="signup">
        <form action="" method="post"></form>
    </div>
    <hr>
    <div>
        <form action="" method="post">
            <h1 style="color: pink; text-align: center; margin-top: 20px;">Sign Up Form</h1>

            <table id="table">
                <tr>
                    <td style="color: pink; font-size: 20px;">Name: </td>
                    <td><input type="text" name="name" id="name" placeholder="example: Htut Khaung" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">Email: </td>
                    <td><input type="email" name="email" id="email" placeholder="example: htut170808@gmail.com" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">Password: </td>
                    <td><input type="password" name="password" id="password" placeholder="example: ******" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">Bias: </td>
                    <td><input type="text" name="bias" id="bias" placeholder="example: Lisa" required></td>
                </tr><br>

                <tr>
                    <td><input type="submit" name="submit" value="Sign Up" id="submit"></td>
                </tr>
            </table>
        </form>
    </div><br><hr><br><br>

    <div class="map">
        <div class="googlemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.26608036269!2d126.90600251459033!3d37.548794432903115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c992bb3f6a887%3A0x6058954f87325221!2sYG%20Entertainment!5e0!3m2!1sen!2smm!4v1637861011035!5m2!1sen!2smm" width="98%" height="400" style="border:1;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <br><hr><br>


    <div id="bottom">
        <h1 style="text-align: center;" id="bottom-text">Created by Htut Khaung (professional web developer)</h1>
    </div>
</body>
</html>