<?php
    include './includes/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us..</title>
    
    <!--fav icon -->
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
   
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu+Mono&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
   
   
    <!-- font Awesome -->
    <!-- all.js loads all styles and icons -->
    <script src="https://kit.fontawesome.com/bda7a64257.js" crossorigin="anonymous"></script>

    <!--css link-->
    <link href="./style/style.css" rel="stylesheet">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);
        /* hedar start */
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        

        /* service start */
        
        html {
            box-sizing: border-box;
        }
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        
        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }
        
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #f1f1f1;
            color: black;
        }
        
        .container {
            padding: 0 16px;
        }
        
        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        .title {
            color: grey;
        }
        
        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        
        .button:hover {
            background-color: #555;
        }
        
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
        /* Service End */
        /* counter start */
        
        section#counter-stats {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }
        
        .stats {
            text-align: center;
            font-size: 35px;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }
        
        .stats .fa {
            color: #008080;
            font-size: 60px;
        }
        /* counter End */
        /* Cotact start */
        
        * {
            box-sizing: border-box;
        }
        /* Style inputs */
        
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        /* Style the container/contact section */
        
        .container {
            border-radius: 5px;
            padding: 10px;
        }
        /* Create two columns that float next to eachother */
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        
        @media screen and (max-width: 600px) {
            .column,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
        /* Contact End */
        /* Footer start */
        
        .site-footer {
            background-color: #26272b;
            padding: 45px 0 20px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
        }
        
        .site-footer hr {
            border-top-color: #bbb;
            opacity: 0.5
        }
        
        .site-footer hr.small {
            margin: 20px 0
        }
        
        .site-footer h6 {
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 2px
        }
        
        .site-footer a {
            color: #737373;
        }
        
        .site-footer a:hover {
            color: #3366cc;
            text-decoration: none;
        }
        
        .footer-links {
            padding-left: 0;
            list-style: none
        }
        
        .footer-links li {
            display: block
        }
        
        .footer-links a {
            color: #737373
        }
        
        .footer-links a:active,
        .footer-links a:focus,
        .footer-links a:hover {
            color: #3366cc;
            text-decoration: none;
        }
        
        .footer-links.inline li {
            display: inline-block
        }
        
        .site-footer .social-icons {
            text-align: right
        }
        
        .site-footer .social-icons a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 6px;
            margin-right: 0;
            border-radius: 100%;
            background-color: #33353d
        }
        
        .copyright-text {
            margin: 0
        }
        
        @media (max-width:991px) {
            .site-footer [class^=col-] {
                margin-bottom: 30px
            }
        }
        
        @media (max-width:767px) {
            .site-footer {
                padding-bottom: 0
            }
            .site-footer .copyright-text,
            .site-footer .social-icons {
                text-align: center
            }
        }
        
        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }
        
        .social-icons li {
            display: inline-block;
            margin-bottom: 4px
        }
        
        .social-icons li.title {
            margin-right: 15px;
            text-transform: uppercase;
            color: #96a2b2;
            font-weight: 700;
            font-size: 13px
        }
        
        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            font-size: 16px;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear
        }
        
        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe
        }
        
        .social-icons.size-sm a {
            line-height: 34px;
            height: 34px;
            width: 34px;
            font-size: 14px
        }
        
        .social-icons a.github:hover {
            background-color: #171515
        }
        
        .social-icons a.behance:hover {
            background-color: #616161
        }
        
        .social-icons a.facebook:hover {
            background-color: #3b5998
        }
        
        .social-icons a.twitter:hover {
            background-color: #00aced
        }
        
        .social-icons a.linkedin:hover {
            background-color: #007bb6
        }
        
        .social-icons a.instagram:hover {
            background-color: #8a3ab9
        }
        
        @media (max-width:767px) {
            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600
            }
        }
        /* Footer End */
    </style>
</head>

<body style="position: relative;">
    <!--header start-->
    <?php 
        include './includes/header.php';
    ?>
    <!--header end-->
    <!-- full img Start -->
    <div class="col-lg-12" style="background-image: url(img/au.jpeg); height: 100vh; width: 100vw;position: relative;">
        <h1 style="position: absolute;color: #000;top: 50%;left: 160px;font-weight: bold;color:#03045E ;font-size: 75px;">About Us...</h1>
        <!--<button class=" btn-info" style="position: absolute; border-radius:30px;height: 70px;width: 200px; top: 70%;left: 160px;background: none; "><a href="" style="text-decoration: none;"><h3> Get In Touch</h3> </a></button>-->
    </div>
    <!-- Full img End -->
    <!-- About Start -->
    <div class="about-section" style="text-align:center">
        <h2>About Us</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img-fluid">
                <img src="img/ob.jpeg" alt="" width="550" height="500"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);border-radius:10px;" >
            </div>
            
                 <div class="col-lg-6" style="">
                <h1>Codelixsolution</h1>
                <p style="font-family:sarif; font-size:25px;">Codelixsolution is a company founded by a team of highly qualified professionals, specialized in delivering original and creative services. For more than 2 years since our inception, we have been delivering outstanding results in software development to all of our clients around the world. We at codelix have the best skillset and process, to get your business that needed technical-edge over your competition. We love what we do and the software we build are efficient, secure, scalable, and are future-ready. We enable businesses to leverage the latest technological advancements.
                </p>
                <h3 style="font-family:'Dancing Script', cursive;"><i class="fa fa-quote-left" style="font-size:20px;"></i> Client Satisfaction is Our First Priority <i class="fa fa-quote-right" style="font-size:20px;"></i></h3>
            </div>
            
        </div>
    </div>
    <!-- About End -->
    <!-- Slider Start -->

    <!-- Slider End -->
    <!-- we creat Start -->
    <div class="about-section">
        <h1>We Create</h1>
    </div>
    <div class="container">
        <div class=" row" style="text-align: center;">
            <div class="col-md-3">
                <div>
                    <img src="img/think.png" alt="Jane" style="width:50px; height: 50px;">
                    <div class="container">
                        <p>Think</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <img src="img/dussions.png" alt="Mike" style="width:50px; height: 50px;">
                    <div class="container">
                        <p>Discussion</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <img src="img/desing.png" alt="John" style="width:50px; height: 50px;">
                    <div class="container">
                        <p>Designing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <img src="img/build.png" alt="John" style="width:50px; height: 50px;">
                    <div class="container">
                        <p>Build</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- we Creat End -->
    <!-- service Start -->
    <div class="about-section">
        <h1>Our Team</h1>
    </div>
    <div class="container">
        <div class=" row">
            <div class="column">
                <div class="card">
                    <img src="img/as.jpeg" alt="Jane" style="width:100% ; height: 200px;">
                    <div class="container">
                        <h4>Vinay Sharma</h4>
                        <p class="title">Founder</p>
                        <p>vinayrunthla0011gmail.com</p>
                        <p><button class="button">9512111481</button></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="C:\Users\Shyam\Downloads" alt="Mike" style="width:100% ; height: 200px;">
                    <div class="container">
                        <h4>Shyam Sharma</h4>
                        <p class="title">CEO Founder</p>
                        <p>shyamshrm08@gmail.com</p>
                        <p><button class="button">9512111482</button></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="img/security.jpeg" alt="John" style="width:100%; height: 200px;">
                    <div class="container">
                        <h4>Nitesh Sharma</h4>
                        <p class="title">CTO Founder</p>
                        <p>sharmanitesh7023@gmail.com</p>
                        <p><button class="button">9512111483</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service End -->
    <!--footer start-->
        <?php 
            include './includes/footer.php';
        ?>
    <!--footer end-->
</body>

</html>