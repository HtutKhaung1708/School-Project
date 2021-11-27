<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ไซต์กะพริบตา</title>
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
         <a href="index.php"><img src="images/logo.png" height="42px" width="42px" id="logo"><h3 id="name">ไซต์กะพริบตา</h3></a>
        <a href="login.php" class="a"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</a>
        <a href="index.php" class="a"><i class="fas fa-language"></i> แปลภาษา</a>
        <a href="logout.php" class="a"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
        

        <div class="search" >
           <input type="text" placeholder="Search Anything" id="search1">
           <button id="search2"><i class="fas fa-search"></i></button>
        </div>

</div>

    <div class="banner">
        <img src="images/banner2.jpg" id="mainjpg"><br><br>
        <div class="banner-texts">
            <h1 align="center" style="color: pink;" id="header">Blackpink</h1><br><br>
            <p id="texts">Blackpink (เกาหลี: 블랙핑크; โดยทั่วไปมีสไตล์เป็น BLACKPINK หรือ BLΛƆKPIИK) คือเกิร์ลกรุ๊ปเกาหลีใต้ที่ก่อตั้งโดย YG Entertainment ซึ่งประกอบด้วยสมาชิก Jisoo, Jennie, Rosé และ Lisa กลุ่มเปิดตัวในเดือนสิงหาคม 2559 ด้วยอัลบั้มเดี่ยวของพวกเขา Square One ซึ่งมีเพลง "Whistle" และ "Boombayah" ซึ่งเป็นผลงานอันดับหนึ่งของพวกเขาในชาร์ต Gaon Digital ของเกาหลีใต้และชาร์ต Billboard World Digital Song Sales ตามลำดับ

Blackpink เป็นนักแสดงสาวชาวเกาหลีที่ติดอันดับสูงสุดใน Billboard Hot 100 โดยขึ้นอันดับที่ 13 ด้วย "Ice Cream" (2020) และใน Billboard 200 ที่จุดสูงสุดที่อันดับสองด้วย The Album (2020) ซึ่งก็เป็นครั้งแรกเช่นกัน -เคยอัลบั้มของเกิร์ลกรุ๊ปเกาหลีขายได้มากกว่าหนึ่งล้านเล่ม[1] พวกเขาเป็นเกิร์ลกรุ๊ปเกาหลีกลุ่มแรกที่เข้าสู่ชาร์ต Billboard's Emerging Artists และขึ้นอันดับหนึ่งในชาร์ต Billboard World Digital Song Sales ถึงสามครั้ง[2] Blackpink ยังเป็นนักแสดงหญิงชาวเกาหลีคนแรกที่ได้รับการรับรองจากสมาคมอุตสาหกรรมแผ่นเสียงแห่งอเมริกา (RIAA) ด้วยซิงเกิ้ลฮิตของพวกเขา "Ddu-Du Ddu-Du" (2018) ซึ่งมิวสิกวิดีโอปัจจุบันมีผู้ชมชาวเกาหลีมากที่สุด กลุ่มบน YouTube[3] เพลง "Kiss and Make Up" ในปี 2018 ที่ร่วมงานกับ Dua Lipa เป็นเพลงแรกที่วงดนตรีเกาหลีได้รับการรับรองจาก British Phonographic Industry (BPI)[4] และใบรับรองระดับแพลตตินั่มจาก Australian Recording Industry Association (ARIA) ).[5]

Blackpink ทำลายสถิติออนไลน์มากมายตลอดอาชีพการงานของพวกเขา มิวสิควิดีโอของพวกเขาสำหรับ "Kill This Love" (2019) และ "How You Like That" (2020) แต่ละชุดบันทึกมิวสิกวิดีโอที่มีผู้ชมมากที่สุดภายใน 24 ชั่วโมงแรกของการเปิดตัว โดยหลังทำลายสามและตั้งค่าสอง Guinness World บันทึก.[6] พวกเขาเป็นกลุ่มดนตรีกลุ่มแรกและนักแสดงหญิงชาวเกาหลีที่มีมิวสิกวิดีโอห้าเพลงซึ่งมียอดดูรวมกันถึงหนึ่งพันล้านครั้งบน YouTube [7] การแสดงดนตรีที่มีผู้ติดตามมากที่สุดบนแพลตฟอร์ม และเกิร์ลกรุ๊ปที่มีผู้ติดตามมากที่สุดบน Spotify โดยมีผู้ติดตามมากกว่า 20 ล้านคน ณ เดือนมีนาคม 2021[8] รางวัลอื่นๆ ของพวกเขา ได้แก่ New Artist of the Year Award จากงาน Golden Disc Awards ครั้งที่ 31 และ Seoul Music Awards ครั้งที่ 26, Mnet Asian Music Award สาขา Best Female Group ในปี 2020, MTV Music Video Award ครั้งแรกที่ชนะโดยเกิร์ลกรุ๊ปเกาหลี[ 9] และได้รับการยอมรับว่าเป็นวงเกาหลีหญิงกลุ่มแรกใน Forbes '30 Under 30 Asia.[10] พวกเขาได้รับการยอมรับจาก Forbes Korea ว่าเป็นหนึ่งในดาราที่ทรงอิทธิพลที่สุดในเกาหลีใต้ โดยได้อันดับหนึ่งในปี 2019 ที่สามในปี 2020 และอันดับที่สองในปี 2021[11] ในเดือนมกราคมปี 2021 Blackpink ได้รับการยกย่องจากประธานาธิบดี Moon Jae-in แห่งเกาหลีใต้ในการเผยแพร่เนื้อหา K-pop ไปทั่วโลกและยอมรับว่าเป็นปรากฏการณ์ K-pop ระดับโลก</p>
        </div>
    </div><br><hr><br>

    <div class="about">
        <h1 style="color: pink;" align="center">เกี่ยวกับ</h1>
        <h2 style="color: pink;" align="center" id="members">คลิกที่ภาพเพื่อรับทราบข้อมูลสมาชิกแต่ละคน</h2><br><br>
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
        <h1 style="color: pink;" align="center" id="stream">เข้าร่วมปาร์ตี้สตรีมมิ่ง Fandom ของเรา</h1><br><br>
        <a href="https://www.youtube.com/results?search_query=how+you+like+that" class="links" target="_blank">สตรีมว่าคุณชอบมันอย่างไรให้ถึง 1.1 พันล้านวิว</a><br><br>

        <a href="https://www.youtube.com/results?search_query=kill+this+love" class="links" target="_blank">สตรีม Kill This Love ถึง 1.5 พันล้านวิว</a><br><br>

        <a href="https://www.youtube.com/watch?v=awkkyBH2zEo" class="links" target="_blank">สตรีมลลิสาสู่ 400 ล้านวิว</a><br><br>
    </div><br><br>

    <div class="voting">
        <h1 style="color: pink;" align="center" id="voting">โหวตลิซ่าและโรเซ่ในรางวัลเพลงมาม่า 2021</h1><br>
        <a href="https://mama.mwave.me/en/main" id="link" target="_blank">คลิกที่นี่เพื่อลงคะแนนเสียง</a><br><br>
    </div><br><br>
    </div>

    <div class="signup">
        <form action="" method="post"></form>
    </div>
    <hr>
    <div>
        <form action="" method="post">
            <h1 style="color: pink; text-align: center; margin-top: 20px;">แบบฟอร์มลงทะเบียน</h1>

            <table id="table">
                <tr>
                    <td style="color: pink; font-size: 20px;">ชื่อ: </td>
                    <td><input type="text" name="name" id="name" placeholder="ตัวอย่าง: Htut Khaung" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">อีเมล: </td>
                    <td><input type="email" name="email" id="email" placeholder="ตัวอย่าง: htut170808@gmail.com" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">รหัสผ่าน: </td>
                    <td><input type="password" name="password" id="password" placeholder="ตัวอย่าง: ******" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">อคติ: </td>
                    <td><input type="text" name="bias" id="bias" placeholder="ตัวอย่าง: Lisa" required></td>
                </tr><br>

                <tr>
                    <td><input type="submit" name="submit" value="ลงชื่อ" id="submit"></td>
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
        <h1 style="text-align: center;" id="bottom-text">สร้างโดย Htut Khaung (นักพัฒนาเว็บมืออาชีพ)</h1>
    </div>
</body>
</html>