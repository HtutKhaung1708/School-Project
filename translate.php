<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    眨眼站点</title>
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
         <a href="index.php"><img src="images/logo.png" height="42px" width="42px" id="logo"><h3 id="name">眨眼站点
        </h3></a>
        <a href="login.php" class="a"><i class="fas fa-sign-in-alt"></i> 登录</a>
        <a href="translate2.php" class="a"><i class="fas fa-language"></i> 翻译</a>
        <a href="logout.php" class="a"><i class="fas fa-sign-out-alt"></i> 登出</a>
        

        <div class="search" >
           <input type="text" placeholder="搜索任何东西" id="search1">
           <button id="search2"><i class="fas fa-search"></i></button>
        </div>

</div>

    <div class="banner">
        <img src="images/banner2.jpg" id="mainjpg"><br><br>
        <div class="banner-texts">
            <h1 align="center" style="color: pink;" id="header"
            >黑粉红</h1><br><br>
            <p id="texts">Blackpink（韩语：블랙핑크；通常称为BLACKPINK或BLΛƆKPIИK）是一个由YG Entertainment组建的韩国女子组合，成员包括Jisoo、Jennie、Rosé和Lisa。该乐队于 2016 年 8 月推出了他们的单曲专辑 Square One，其中以“Whistle”和“Boombayah”为特色，这是他们分别在韩国 Gaon Digital Chart 和 Billboard World Digital Song Sales 排行榜上排名第一的作品。

Blackpink 是 Billboard Hot 100 上最高的韩国女艺人，凭借“Ice Cream”（2020 年）达到第 13 位，在 Billboard 200 中凭借 The Album（2020 年）达到第二名，这也是第一次- 韩国女子组合的专辑销量超过一百万张。 [1]他们是第一个进入公告牌新兴艺术家排行榜并荣登榜首的韩国女子组合，并三度登上公告牌世界数字歌曲销售榜榜首。 [2] Blackpink 也是第一位获得美国唱片业协会 (RIAA) 认证的韩国女艺人，她们的热门单曲“Ddu-Du Ddu-Du”（2018 年）是目前韩国观众观看次数最多的音乐视频YouTube 上的群组。[3]他们与 Dua Lipa 合作的 2018 年歌曲“Kiss and Make Up”是韩国乐队第一次获得英国唱片业协会 (BPI)[4] 的认证和澳大利亚唱片业协会 (ARIA) 的白金认证).[5]

Blackpink 在其整个职业生涯中打破了无数在线记录。他们的“Kill This Love”（2019）和“How You Like That”（2020）的音乐录影带均创下了发行前 24 小时内收视率最高的音乐录影带，后者打破了三项并创造了两项吉尼斯世界纪录记录。[6]他们是第一个在 YouTube 上拥有 5 个音乐视频的音乐团体和韩国女艺人，每个视频的观看次数都达到了 10 亿；[7] 平台上订阅人数最多的音乐艺人；以及 Spotify 上最受关注的女团，截至 2021 年 3 月拥有超过 2000 万粉丝。[8]他们的其他荣誉包括第 31 届金唱片奖和第 26 届首尔音乐奖的年度新人奖、2020 年 Mnet 亚洲音乐奖最佳女团、韩国女子组合获得的第一个 MTV 音乐录影带奖、[ 9] 并被评为福布斯亚洲 30 岁以下 30 岁以下的第一个韩国女性团体。[10]他们被福布斯韩国评为韩国最有影响力的名人之一，在 2019 年排名第一，2020 年排名第三，2021 年排名第二。 [11] 2021 年 1 月，Blackpink 因在全球传播 K-pop 内容而受到韩国总统文在寅的称赞，并承认它们是全球 K-pop 现象</p>
        </div>
    </div><br><hr><br>

    <div class="about">
        <h1 style="color: pink;" align="center">关于</h1>
        <h2 style="color: pink;" align="center" id="members">点击图片了解每个成员</h2><br><br>
        <a href="about.php">
            <img src="images/lisa.jpg" id="lisa">
        </a>

        <a href="about.php">
            <img src="images/jennie.jpg" id="jennie">
        </a>

        <a href="about.php">
            <img src="images/rose.jpg" id="rose">
        </a>

        <a href="about.php">
            <img src="images/jisoo.jpg" id="jisoo">
        </a>
    </div><br><hr><br>

    <div class="streaming">
        <h1 style="color: pink;" align="center" id="stream">加入我们的粉丝群的流媒体派对</h1><br><br>
        <a href="https://www.youtube.com/results?search_query=how+you+like+that" class="links" target="_blank">Stream How You Like That 达到 11 亿次观看</a><br><br>

        <a href="https://www.youtube.com/results?search_query=kill+this+love" class="links" target="_blank">Stream Kill This Love 达到 15 亿次观看</a><br><br>

        <a href="https://www.youtube.com/watch?v=awkkyBH2zEo" class="links" target="_blank">将 Lalisa 流式传输到 4 亿次观看</a><br><br>
    </div><br><br>

    <div class="voting">
        <h1 style="color: pink;" align="center" id="voting">为 2021 年妈妈音乐奖投票 Lisa 和 Rosé</h1><br>
        <a href="https://mama.mwave.me/en/main" id="link" target="_blank">点击这里投票</a><br><br>
    </div><br><br>
    </div>

    <div class="signup">
        <form action="" method="post"></form>
    </div>
    <hr>
    <div>
        <form action="" method="post">
            <h1 style="color: pink; text-align: center; margin-top: 20px;">报名表</h1>

            <table id="table">
                <tr>
                    <td style="color: pink; font-size: 20px;">
                    姓名: </td>
                    <td><input type="text" name="name" id="name" placeholder="示例：Htut Khaung" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">电子邮件: </td>
                    <td><input type="email" name="email" id="email" placeholder="例如：htut170808@gmail.com" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">密码: </td>
                    <td><input type="password" name="password" id="password" placeholder="例如: ******" required></td>
                </tr><br>

                <tr>
                    <td style="color: pink; font-size: 20px;">偏见: </td>
                    <td><input type="text" name="bias" id="bias" placeholder="例如: Lisa" required></td>
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
        <h1 style="text-align: center;" id="bottom-text">由 Htut Khaung（专业 Web 开发人员）创建</h1>
    </div>
</body>
</html>