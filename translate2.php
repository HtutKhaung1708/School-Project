<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>မျက်တောင်ဆိုဒ်</title>
    <link rel="stylesheet" href="style2.css">
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
         <a href="index.php"><img src="images/logo.png" height="42px" width="42px" id="logo"><h3 id="name">မျက်တောင်ဆိုဒ်</h3></a>
        <a href="login.php" class="a"><i class="fas fa-sign-in-alt"></i> လော့ဂ်အင်</a>
        <a href="translate3.php" class="a"><i class="fas fa-language"></i> ဘာသာပြန်</a>
        <a href="logout.php" class="a"><i class="fas fa-sign-out-alt"></i> ထွက်လိုက်ပါ</a>
        

        <div class="search" >
           <input type="text" placeholder="ဘာမဆိုရှာပါ" id="search1">
           <button id="search2"><i class="fas fa-search"></i></button>
        </div>

</div>

    <div class="banner">
        <img src="images/banner2.jpg" id="mainjpg"><br><br>
        <div class="banner-texts">
            <h1 align="center" style="color: pink;" id="header">Blackpink</h1><br><br>
            <p id="texts">Blackpink (ကိုရီးယား- 블랙핑크; BLACKPINK သို့မဟုတ် BLΛƆKPIИK) သည် အဖွဲ့ဝင် Jisoo၊ Jennie၊ Rosé နှင့် Lisa တို့ ပါဝင်သော YG Entertainment မှ ဖွဲ့စည်းထားသော တောင်ကိုးရီးယား မိန်းကလေးအဖွဲ့တစ်ခုဖြစ်သည်။ ၎င်းတို့အဖွဲ့သည် တောင်ကိုရီးယား၏ Gaon Digital Chart နှင့် Billboard World Digital Song Sales chart အသီးသီးတွင် "Whistle" နှင့် "Boombayah" တို့ပါဝင်သည့် ၎င်းတို့၏ single album Square One နှင့် 2016 ခုနှစ် သြဂုတ်လတွင် ပွဲဦးထွက်ခဲ့သည်။

            Blackpink သည် Billboard Hot 100 တွင် နံပါတ် 13 တွင် နံပါတ် 13 နေရာတွင် ရပ်တည်နေပြီး Billboard 200 တွင် နံပါတ် 2 နေရာတွင် ရပ်တည်နေပြီး ပထမဆုံး The Album (2020) ဖြင့် နံပါတ် 2 နေရာတွင် ရပ်တည်နေသည်။ -ကိုရီးယားမိန်းကလေးအဖွဲ့မှ အယ်လ်ဘမ် အချပ်ရေ တစ်သန်းကျော် ရောင်းချခဲ့ရသည်။ ၎င်းတို့သည် Billboard ၏ Emerging Artists ဇယားတွင် ထိပ်ဆုံးမှ ဝင်ရောက်ခဲ့ပြီး Billboard World Digital Song Sales ဇယားတွင် သုံးကြိမ်တိုင်တိုင် ထိပ်ဆုံးရောက်ခဲ့သော ကိုရီးယားမိန်းကလေးအဖွဲ့ဖြစ်သည်။ Blackpink သည် Recording Industry Association of America (RIAA) မှ အသိအမှတ်ပြုလက်မှတ်ကို ရရှိသည့် ပထမဆုံးသော ကိုရီးယားအမျိုးသမီး သရုပ်ဆောင်တစ်ဦးဖြစ်ပြီး ၎င်းတို့၏ တေးသီချင်း "Ddu-Du Ddu-Du" (2018) ၏ တေးဂီတဗီဒီယိုသည် လက်ရှိတွင် ကိုးရီးယားမှ ကြည့်ရှုမှုအများဆုံး ဖြစ်နေပါသည်။ YouTube ရှိ အဖွဲ့။[3] Dua Lipa နှင့် ပူးပေါင်းထားသည့် ၎င်းတို့၏ 2018 သီချင်း "Kiss and Make Up" သည် British Phonographic Industry (BPI) မှ အသိအမှတ်ပြုလက်မှတ်နှင့် Australian Recording Industry Association (ARIA) မှ ပလက်တီနမ်အသိအမှတ်ပြုလက်မှတ်ကို ပထမဆုံးရရှိသည့် ကိုရီးယားအဖွဲ့မှ ပထမဆုံးသော သီချင်းဖြစ်သည်။ )[5]

            Blackpink သည် ၎င်းတို့၏ ကစားသမားဘဝတစ်လျှောက်လုံး အွန်လိုင်းမှတ်တမ်းများစွာကို ချိုးဖျက်ခဲ့သည်။ "Kill This Love" (2019) နှင့် "How You Like That" (2020) အတွက် ၎င်းတို့၏ တေးဂီတဗီဒီယိုများသည် ပထမ 24 နာရီအတွင်း လူကြည့်အများဆုံး ဂီတဗီဒီယိုအတွက် စံချိန်တင်ထားကာ နောက်ဆုံး 3 ပိုင်းနှင့် ဂင်းနစ်ကမ္ဘာ့ဖလားနှစ်ခုကို သတ်မှတ်ပေးထားသည်။ မှတ်တမ်းများ။[6] ၎င်းတို့သည် YouTube ပေါ်တွင် တေးဂီတဗီဒီယိုငါးခုစီကို ကြည့်ရှုမှု တစ်ဘီလီယံအထိ ရရှိသည့် ပထမဆုံးသော တေးဂီတအဖွဲ့ဖြစ်ပြီး ကိုရီးယားအမျိုးသမီးသရုပ်ဆောင်အဖြစ်၊[7] ပလက်ဖောင်းပေါ်တွင် စာရင်းသွင်းမှုအများဆုံး တေးဂီတလုပ်ဆောင်ချက်ဖြစ်သည်။ 2021 ခုနှစ် မတ်လအထိ Follower သန်း 20 ကျော်ရှိသည့် Spotify တွင် Followers အများဆုံးမိန်းကလေးအဖွဲ့ဖြစ်သည်။ ၎င်းတို့၏ အခြားသော ဂုဏ်ထူးဆောင်ဆုများမှာ 31st Golden Disc Awards နှင့် 26th Seoul Music Awards တွင် တစ်နှစ်တာအကောင်းဆုံးအနုပညာရှင်ဆု၊ 2020 ခုနှစ်အတွက် အကောင်းဆုံးအမျိုးသမီးအဖွဲ့အတွက် Mnet Asian Music Award၊ Korean girl group မှ ပထမဆုံးသော MTV Music Video Award၊[ 9] Forbes ၏ 30 Under 30 Asia တွင် ပထမဆုံးသော အမျိုးသမီး ကိုရီးယားအဖွဲ့အဖြစ် အသိအမှတ်ပြုခံရခြင်း။ ၎င်းတို့ကို Forbes Korea မှ အသိအမှတ်ပြုခံရပြီး တောင်ကိုရီးယားတွင် သြဇာအရှိဆုံး အနုပညာရှင်များထဲမှ တစ်ဦးအဖြစ် 2019 ခုနှစ်တွင် ပထမ၊ 2020 ခုနှစ်တွင် တတိယနှင့် 2021 ခုနှစ်တွင် ဒုတိယနေရာတွင် ရပ်တည်ခဲ့သည်။[11] 2021 ခုနှစ် ဇန်နဝါရီလတွင် Blackpink သည် K-pop အကြောင်းအရာများကို ကမ္ဘာတစ်ဝှမ်းတွင် ပျံ့နှံ့စေသည့်အတွက် တောင်ကိုရီးယားသမ္မတ Moon Jae-in အား ချီးကျူးဂုဏ်ပြုခဲ့ပြီး ၎င်းတို့အား ကမ္ဘာလုံးဆိုင်ရာ K-pop ဖြစ်စဉ်တစ်ခုအဖြစ် အသိအမှတ်ပြုခဲ့သည်။</p>
        </div>
    </div><br><hr><br>

    <div class="about">
        <h1 style="color: pink;" align="center">အကြောင်း</h1>
        <h2 style="color: pink;" align="center" id="members">အဖွဲ့ဝင်တစ်ဦးစီအကြောင်းသိရန် ပုံများကိုနှိပ်ပါ</h2><br><br>
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
        <h1 style="color: pink;" align="center" id="stream">ကျွန်ုပ်တို့၏ Fandom ၏ ထုတ်လွှင့်ခြင်းပါတီတွင် ပါဝင်ပါ</h1><br><br>
        <a href="https://www.youtube.com/results?search_query=how+you+like+that" class="links" target="_blank">ကြည့်ရှုမှု 1.1 ဘီလီယံအထိ သင်နှစ်သက်ပုံကို တိုက်ရိုက်ကြည့်ရှုပါ</a><br><br>

        <a href="https://www.youtube.com/results?search_query=kill+this+love" class="links" target="_blank">တိုက်ရိုက်ကြည့်ရှုမှု 1.5 ဘီလီယံအထိ ဤ Love ကိုသတ်ပါ။</a><br><br>

        <a href="https://www.youtube.com/watch?v=awkkyBH2zEo" class="links" target="_blank">Lalisa ကို ကြည့်ရှုမှု သန်း 400 အထိ ကြည့်ရှုပါ</a><br><br>
    </div><br><br>

    <div class="voting">
        <h1 style="color: pink;" align="center" id="voting">2021 ခုနှစ် Mama ဂီတဆုအတွက် Lisa နှင့် Rosé ကို မဲပေးပါ</h1><br>
        <a href="https://mama.mwave.me/en/main" id="link" target="_blank">မဲပေးရန် ဤနေရာကိုနှိပ်ပါ</a><br><br>
    </div><br><br>
    </div>

    <div class="signup">
        <form action="" method="post"></form>
    </div>
    <hr>
    <div>
        <form action="" method="post">
            <h1 style="color: pink; text-align: center; margin-top: 20px;">ဖောင်စာရင်းသွင်းပါ</h1>

            <table id="table">
                <tr>
                    <td style="color: pink; font-size: 20px;">နာမည်: </td>
                    <td><input type="text" name="name" id="name" placeholder="ဥပမာ-ထွဋ်ခေါင်" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">အီးမေးလ်: </td>
                    <td><input type="email" name="email" id="email" placeholder="ဥပမာ- htut170808@gmail.com" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">စကားဝှက်: </td>
                    <td><input type="password" name="password" id="password" placeholder="ဥပမာ- ******" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">ဘက်လိုက်မှု: </td>
                    <td><input type="text" name="bias" id="bias" placeholder="ဥပမာ- လီဆာ" required></td>
                </tr><br>

                <tr>
                    <td><input type="submit" name="submit" value="ဆိုင်းအပ်" id="submit"></td>
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
        <h1 style="text-align: center;" id="bottom-text">
ဖန်တီးသူ Htut Khaung (ကျွမ်းကျင်သော web developer)</h1>
    </div>
</body>
</html>