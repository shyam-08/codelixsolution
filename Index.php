<?php
    include './includes/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <title>Codelixsolution</title>
    <meta charset="utf-8">
    <meta name="description" content="Codelixsolution is IT solution based company which provide digital services like digital marketing, web and app based solution, social page inhancement etc.">
    <meta name="keywords" content="Digital Marketing, Web Development, App Development, Social Media, Graphic Design">
    <meta http-equiv="refresh" content="300">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
   
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);
        /*for dancing script*/
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
        
        * {
            box-sizing: border-box;
        }
        html{
            box-sizing: border-box;
        }
        
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            overflow:hidden;
        }
        
        /*header start*/
.header{
    position: relative;
}
/*navbar start*/
.checkbtn{
    float: right;
    margin-top: 1px;
    /*padding: 1em 0;*/
    cursor: pointer;
    display: none;
}
#check{
    display: none;
}
.navbar{
    background-color: #fff;
    padding:0 20px 0 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10;
    box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.navbar a{
    /*padding-bottom: 0.3rem;*/
    padding: 1rem 2.5rem;
    font-family: sans-serif;
    font-weight:bold;
    text-decoration:none;
}
.navbar a:link,
.navbar a:visited{
    /*color: #302a2a;*/
    color:#03045E;
}
.navbar a:hover{
    /*padding: 5px;*/
    /*border-bottom: 2px solid rgb(83, 81, 81);*/
    /*border: 1px solid rgb(237, 12, 12);*/
    background-color: #eee;
    font-family: sans-serif;
    /*color: #10dbe6;*/
}
.navbar .logo{
    float: left;
    font-weight: 700;
}
.navbar .nav-items{
    float: right;
    margin-top: 0.8rem;
}



.dropdown .dropbtn {
  /*font-size: 16px;  */
  border: none;
  outline: none;
  color: #000;
  padding: 14px 16px;
  background-color: inherit;
  /*font-family: inherit;*/
  margin: 0;
}

.dropdown:hover .dropbtn {
  background-color: #eee;
}

.dropdown-content {
  height: 320px;
  width: 390px;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  /*min-width: 151px;*/
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 10px 14px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.navbar .nav-item{
    display: inline-block;
    padding: 1rem 0rem;
    text-transform: uppercase;
    /*border: 1px solid red;*/
}
.navbar::after{
    content: "";
    display: block;
    clear: both;
}
.container{
    max-width: 1200px;
    width: 90%;
    margin: 0 auto;
}
.navbar .nav-items .call-now{
    /*background-color: #000;*/
    background: linear-gradient(to right, #03045e 0%, #0096c8 100%);
    color: #fff;
    border-radius: 2em;
}
.navbar .nav-items .call-now:hover{
    background-color: rgba(255, 0, 0, 0.8);
}

/*Extra small devices (phones, 600px and down)*/
@media only screen and (max-width: 600px){
    .navbar .logo{
        float: none;
        font-size: 20px;
    }
    .navbar .nav-items{
        float: none;
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #1D212B;
        left: -100%;
        top:0;
        text-align: center;
        transition: all 0.5s;
        margin-top: 5px;
        padding-top:20px;
    }
    .navbar .nav-item{
        display: block;
    }
    .checkbtn{
        display: block;
        position:absolute;
        right:10%;
    }
    .navbar a{
        font-size: 15px;
        text-decoration:none;
    }
    .navbar h6{
        color:#000;
    }
    .navbar a:link,
    .navbar a:visited{
    /*color: #302a2a;*/
    color: #fff;
    }
    .navbar a:hover{
        background-color: transparent;
        border: 1px solid #d67315;
    }
    #check:checked ~ .nav-items{
        left: 0;
    }
    .dropdown-content{
        /*background-color: #1D212B;*/
        background-color: #fff;
        margin-left: 51px;
        margin-top: 20px;
        min-width: 54px;
        height: 370px;
        width: 220px;
        overflow-y:auto;
    }
    .dropdown:hover .dropbtn{
        background-color: #1D212B;
        border: 1px solid #d67315;
    }
    .dropdown-content a:hover {
        /*background-color:  #1D212B;*/
    }
}


        /*header end*/
        
        
        /* service start */
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        
        .column {
            float: left;
            width: 25%;
            margin-bottom: 16px;
            padding: 0 8px;
            margin:auto;
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }
        
        .about-section {
            padding: 30px 50px;
            text-align: center;
            background-color: #fff;
            color: #03045E;
            /*color:#0096C8;*/
        }
        .about-section h1{
            font-weight:600;
            position:relative;
        }
        
            .about-section h1::after{
                content:'';
                width:5%;
                height:4px;
                background:#0096C8;
                /*background:#03045E;*/
                position:absolute;
                bottom:-20%;
                left:50%;
                transform:translateX(-50%);
                border-radius:5px;
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
        
        /*Extra tablet devices (phones, 768px and down)*/
        @media only screen and (max-width: 768px){
            .column {
            width: 80%;
            margin-left:60px;
        }
        
        }
        
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
                margin:auto;
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
            /*background-color: #26272b;*/
            background-color: #0a063b;
            /*background-color: #06042e;*/
            padding: 45px 0 20px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
        }
        .f-heading{
            position:relative;
            font-weight:bold;
        }
        .f-heading::after{
            content:'';
            width:40px;
            height:4px;
            background:#0096C8;
            /*background:#03045E;*/
            position:absolute;
            bottom:-25%;
            left:0%;
            transform:translateX(-0%);
            border-radius:5px;
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
            color: #737373;
            text-decoration:none;
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
        
        
        
        /*full img Start*/
        .f-img{
            background-image: url(./img/main.jpeg);
            height:100vh;
            width:100vw;
            /*background-size: cover;*/
            /*background-repeat: no-repeat;*/
            position:relative;
        }
         .f-img div{
            position: absolute;top: 40%;left: 70px;
        }
        .f-img div h1:nth-child(1){
            color: #000;font-weight: bold;color:#03045E ;font-size: 65px;
        }
        .f-img div h1:nth-child(2){
            color: #000;top: 60%;font-weight: bold;color:black; font-size: 35px;
        }
        .f-img div button{
            border-radius:30px;height: 50px;width: 180px;
        }
        .f-img div button a h3{
                font-size:17px;font-weight:bold;
            }
        /*Extra small devices (phones, 600px and down)*/
        @media only screen and (max-width: 600px){
          .f-img div{
            position: absolute;top: 50%;left:30px;
        }
        .f-img div h1:nth-child(1){
            font-weight: bold;color:#03045E ;font-size: 45px;
        }
        .f-img div h1:nth-child(2){
            top: 60%;font-weight: bold;color:black; font-size: 23px;
        }
        .f-img div button{
            border-radius:30px;height: 50px;width: 180px;
        }
        .f-img div button a h3{
                font-size:17px;font-weight:bold;
            }
        }
        /*full img end*/
        
        /*certification section start*/
        .crtf{
            height:170px;
        }
        /*Extra small devices (phones, 600px and down)*/
        @media only screen and (max-width: 600px){
           .c-none,.c-none-1{
                display:none;
            }
        }
        
        /*Extra tablets devices (phones, 768px and down)*/
        @media only screen and (max-width: 768px){
            .crtf{
                height:150px;
            }
            .c-none,.c-none-1{
                display:none;
            }
        }
        /*certification section end*/
        
        /*about section start*/
        .about .row div img{
            height:480px;width:480px;border-radius:0 80px 0 80px;
        }
        .about h3{
                text-align:center;
                font-weight:700;
                color:#FFFFFF;
            }
        .about p{
            font-size:23px;
            /*color:#545454;*/
            color:#EBEBEB;
        }
        /*Extra small devices (phones, 600px and down)*/
        @media only screen and (max-width: 600px){
            .about .row div img{
                height:300px;width:300px;
                margin-left:10px;
            } 
            .about h3{
                text-align:center;
            }
            .about h3::after{
                content:'';
                width:50px;
                height:5px;
                display:block;
                background:#03045E;
            }
            .about p{
                font-size:20px;
            }
        }
        /*Extra tablets devices (phones, 768px and down)*/
        @media only screen and (max-width: 768px) and (min-width: 600px){
            .about .row div img{
                margin-left:80px;
            } 
        }
        /*about section end*/
        
        /*contact section start*/
        .contact{
            margin-bottom:20px;
        }
        .c-form{
            padding:20px 40px;
        }
        .c-form h1{
            color:#fff;font-weight:bold;
        }
        .c-form form{
            color:#fff;font-weight:bold;
        }
        .c-form form input[type=text]{
            background:#fff;border-radius:10px;
        }
        .c-form form textarea{
            height:170px;background:#fff;border-radius:10px;
        }
        .c-form form input[type=submit]{
            width:200px;margin-left:30%;background:linear-gradient(to right, #03045e 0%, #ff99cc 100%);
        }
        /*Extra small devices (phones, 600px and down)*/
        @media only screen and (max-width: 600px){
            .c-form form input[type=submit]{
                margin-left:9%;
            }
        }
        /*contact section end*/
        
    </style>
</head>

<body style="position: relative;">
    <!--header start-->
    <?php 
        include './includes/header.php';
    ?>
    <!--header end-->
    
    <!-- full img Start -->
    <div style="background:#f7f7f7;">
<div class="container-fluid f-img">
 
      <div>
            <h1>Codelix<span style="color: #0096C8;">solution</span></h1>
    
            <h1>Grow Your Business With Us...</h1>
            <button class=" btn-info" style="background: linear-gradient(to right, #03045e 0%, #0096c8 100%);color:#fff;border:none;"><a href="./contactus.php" style="text-decoration: none;"><h3> Get In Touch</h3> </a></button>
        </div>
</div>
     <!--<div class="col-md-7 f">-->
     <!--  <img src="./img/serviceweb.png" style="height: 100vh;width: 100%;padding-top: 90px;">-->
     <!--</div>-->
  </div>

    <!-- Full img End -->
    <!-- Slider Start -->

    <!-- Slider End -->
    <!-- Slider Start -->

    <!-- Slider End -->

    <!-- service Start -->
    <div class="about-section">
        <h1>Service</h1>
          <h5 style="font-family:sarif;color:#a1a1a1;"> Codelixsolution is one of the best software development Company in India. Since our inception, we have been successful in delivering many projects of mobile app development, web application development and systems programming with 100% client satisfaction. </h5>
    </div>
    <div class="container">
       
     
        <div class=" row">
            <div class="column">
                <div class="card">
                    <img src="img/as.jpeg" alt="Jane" style="width:100% ; height: 190px;">
                    <div class="container">
                        <h2>App Deveploment</h2>
                        <p class="title">
                highlight that fascination into MobApp development service.</p>

                        <p><a href="./android.php" style="text-decoration:none;"><button class="button rounded-pill">Explore More</button></a></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/ws.jpeg" alt="Mike" style="width:100% ; height: 190px;">
                    <div class="container">
                        <h2>Web Development</h2>

                        <p class="title">Solution based web services to the spike growth</p>
                        <p><a href="./webdevlopment.php" style="text-decoration:none;"><button class="button rounded-pill">Explore More</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="img/security.jpeg" alt="John" style="width:100%; height: 190px;">
                    <div class="container">
                        <h2>Security</h2>
                        <p class="title">protecting web apps from attacks include applying up-to-date encryption.</p>

                        <p><a href="./web_security.php" style="text-decoration:none;"><button class="button rounded-pill">Explore More</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="img/tredmark.jpeg" alt="John" style="width:100%; height: 190px;">
                    <div class="container">
                        <h2>Trademark</h2>
                        <p class="title">A trademark identifies the brand owner of a particular product or service</p>
                        <p><a href="./tredmark.php" style="text-decoration:none;"><button class="button rounded-pill">Explore More</button></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="img/gd.jpeg" alt="Jane" style="width:100%; height: 190px;">
                    <div class="container">
                        <h2>Graphic Design</h2>
                        <p class="title">we offer a wide range of custom graphic design services</p>
                        <p><a href="./graphic.php" style="text-decoration:none;"><button class="button rounded-pill">Explore More</button></a></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/serivice.jpg" alt="Mike" style="width:100% ;height: 190px;">
                    <div class="container">
                        <h2>Digital Service</h2>
                        <p class="title">Digital networks to market a company’s
            products and services.</p>

                        <p><a href="./marketing.php" style="text-decoration:none;"><button class="button rounded-pill">Explore More</button></a></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/socialnetwork.png" alt="John" style="width:100% ;height: 190px;">
                    <div class="container">
                        <h2>Social Media</h2>
                        <p class="title">social networks to market a company’s
            products and services.</p>

                        <p><a href="./social_Media.php" style="text-decoration:none;"><button class="button rounded-pill">Explore More</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="img/qr.png" alt="John" style="width:100%; height: 190px;">
                    <div class="container">
                        <h2>Qr Code</h2>
                        <p class="title">The QR system became popular outside the industry due to its fast readability</p>

                        <p><a href="./qrcode.php" style="text-decoration:none;"><button class="button rounded-pill">Explore More</button></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service End -->
    
    <!-- ******************************* certification section start ********************************* -->
 <div class="about-section" style="text-align:center">
        <h1>Consultants Service</h1>
        <h6 style="font-family:sarif;color:#a1a1a1;">Codelixsolution is a leading consultancy firm dedicated to safety, social good and sustainability. We are a leader in Standards Development and in Testing, Inspection and Certification in India. Our mandate is to hold the future to a higher standard products to consumer’s.</h6>
    </div>
	<section class="container mt-3">
		<div class="row">
            
			<div class="col-sm-10 col-md-10">
				<div class="row">
				   <div class="col-md-1 p-3 text-white rounded-3 c-none">
				   	<div class="rounded-3"></div>
				   </div>

				   <div class="col-md-2  col-6 p-3 text-white rounded-3">
				   	<div class="rounded-3 crtf" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><a href="./bis.php"><img src="./img/bis.jpeg" style="width:100%;height: 100%;padding: 10px 0 0 0;"></a></div>
				   </div>

				   <div class="col-md-4 p-3 text-white rounded-3 c-none">
				   	<div class="rounded-3"></div>
				   </div>

				   <div class="col-md-2 col-6 p-3 text-white rounded-3">
				   	<div class="rounded-3 crtf" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><a href="./bee.php"><img src="./img/bee.png" style="width:95%;height: 95%;padding: 10px 0;"></a></div>
				   </div>

				   <div class="col-md-1 p-3 text-white rounded-3 c-none">
				   	<div class="rounded-3"></div>
				   </div>

				   <div class="col-md-2 col-6 p-3 text-white rounded-3">
				   	<div class="rounded-3 crtf" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><a href="ce.php"><img src="./img/ce.jpeg" style="width:100%;height: 100%;"></a></div>
				   </div>
				</div>

				<div class="row">
				   <div class="col-md-2 col-6 p-3 text-white rounded-3">
				   	<div class="rounded-3 crtf" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><a href="./epr.php"><img src="./img/epr.png" style="width:100%;height: 100%;"></a></div>
				   </div>

				   <div class="col-md-3 col-6 p-3 text-white">
				   	<div class="rounded-circle crtf"><a href="./rohs.php"><img src="./img/rohs.jpeg" class="rounded-circle" style="width:95%;height: 95%;padding: 0 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></a></div>
					</div>

				   <div class="col-md-3 col-6 p-3  text-white ">
				   	<div class="rounded-circle crtf"><a href="./iso.php"><img src="./img/iso.jpeg" class="rounded-circle" style="width:95%;height: 95%;padding: 20px 0;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></a></div>
				   </div>

				   <div class="col-md-2 col-6 p-3 text-white rounded-3">
				   	<div class="rounded-3 crtf" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><a href="./nabl.php"><img src="./img/Nabl.jpeg" style="width:100%;height: 100%;padding: 20px 0;"></a></div>
				   </div>

				   <div class="col-md-2 col-6 p-3 text-white rounded-3">
				   	<div class="rounded-3 crtf" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><a href="./fcc.php"><img src="./img/FCC.png" style="width:95%;height: 95%;padding: 20px 0;"></a></div>
				   </div>
				</div>

				<div class="row">
				   <div class="col-md-1 p-3 text-white rounded-3 c-none">
				   	<div class="rounded-3"></div>
				   </div>

				   <div class="col-md-2 col-6 p-3 text-white rounded-3">
				   	<div class="rounded-3 crtf" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><a href="./tec.php"><img src="./img/tec.jpeg" style="width:100%;height: 100%;"></a></div>
				   </div>

				   <div class="col-md-4 p-3 text-white rounded-3 c-none">
				   	<div class="rounded-3"></div>
				   </div>

				   <div class="col-md-2 col-6 p-3 text-white rounded-3">
				   	<div class="rounded-3 crtf" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><a href="./wpc.php"><img src="./img/Wpc.png" style="width:100%;height: 100%;padding: 10px 0;"></a></div>
				   </div>

				   <div class="col-md-1 p-3 text-white rounded-3 c-none">
				   	<div class="rounded-3"></div>
				   </div>

				   <div class="col-md-2 col-6 p-3 text-white rounded-3 c-none-1">
				   	<div class="rounded-3 crtf" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><a href="./impc.php"><img src="./img/lmpc.png" style="width:100%;height: 100%;padding: 10px 0;"></a></div>
				   </div>
				</div>
			</div>
 
			<div class="col-sm-2 col-md-2"></div>

		</div>
	</section>
	<!-- ******************************* certification section end ********************************* -->
    
    <!-- About Start -->
    <div class="about-section" style="text-align:center">
        <h1>About Us</h1>
    </div>
    <div class="about" style="background:#0a063b;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 img-fluid">
                    <!--<img src="img/cp.png" alt="" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">-->
                    <img src="https://media.istockphoto.com/photos/finding-solutions-together-picture-id1163884774?k=20&m=1163884774&s=170667a&w=0&h=YGoB1HH1GFfpLuxuf1ONBo8WaZL5D5xe60j5iBBIR84=" alt="" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);object-fit: cover;">
                </div>
                <div class="col-lg-6">
                    <h3>Codelixsolution</h3>
                    <p style="font-family:sarif;">Codelixsolution is a company founded by a team of highly qualified professionals, specialized in delivering original and creative services. For more than 2 years since our inception, we have been delivering outstanding results in software development to all of our clients around the world. We at codelix have the best skillset and process, to get your business that needed technical-edge over your competition. We love what we do and the software we build are efficient, secure, scalable, and are future-ready. We enable businesses to leverage the latest technological advancements.
                    </p>
                    <h3 style="font-family:'Dancing Script', cursive;"><i class="fa fa-quote-left" style="font-size:20px;"></i> Client Satisfaction is Our First Priority <i class="fa fa-quote-right" style="font-size:20px;"></i></h3>
                </div>
            </div>
        </div>
        <hr style="border-width:2px;margin:20px 40px;">
        <div class="container" style="margin-top:25px;">
      <div class="row text-center">
        <div class="col-md-4" >
          <i class="fa fa-users" style="font-size:80px;color:#f1f1f1;"></i>
          <h3><span class="counter">45</span></h3>
          <h5 style="color:#0096C8;font-weight:bold;">Happy Clients</h5>
        </div> 
        <div class="col-md-4">
            <i class="fa fa-desktop" style="font-size:80px;color:#f1f1f1;"></i>
          <h3><span class="counter">12946</span></h3>
          <h5 style="color:#0096C8;font-weight:bold;">Total Web Pages</h5>
        </div>
        <div class="col-md-4">
            <i class="fa fa-coffee" style="font-size:80px;color:#f1f1f1;"></i>
          <h3><span class="counter">8346</span></h3>
          <h5 style="color:#0096C8;font-weight:bold;">Working Hours</h5>
        </div>
      </div>
    </div>
        
    </div>
    <!-- About End -->
    <!-- section counter Start -->
    <!--<div class="container" style="margin-top:25px;">-->
    <!--  <div class="row text-center">-->
    <!--    <div class="col-md-4" >-->
    <!--      <i class="fa fa-users" style="font-size:40px;color:#0096C8;"></i>-->
    <!--      <h3><span class="counter">45</span></h3>-->
    <!--      <h5>Happy Clients</h5>-->
    <!--    </div> -->
    <!--    <div class="col-md-4">-->
    <!--        <i class="fa fa-desktop" style="font-size:40px;color:#0096C8;"></i>-->
    <!--      <h3><span class="counter">12946</span></h3>-->
    <!--      <h5>Total Web Pages</h5>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <i class="fa fa-coffee" style="font-size:40px;color:#0096C8;"></i>-->
    <!--      <h3><span class="counter">8346</span></h3>-->
    <!--      <h5>Working Hours</h5>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    
    <!--for jquery styling-->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--waypoints cdn-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!--counterup cdn-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        // number count for stats, using jQuery animate

        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
        $('.counter').addClass('animated fadeInDownBig');
        $('h3').addClass('animated fadeIn');
    </script>
    <!-- section counter End -->
    <!-- Testimonials Start -->
    <div class="about-section" style="text-align:center">
        <h1> Testimonials </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="container">
                        <p><i class="fa fa-quote-left"></i> Codelixsolution is the best web and app development company, I have ever worked with. I wanted to develop a dot net based website for my venture. They developed a unique solution for me which provided lots of opportunities for
                            my business. All I can say is that they are great at managing each phase very calmly and also without any misconception. Thanks a lot!</p>
                            <div>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                            </div>
                        <h3>- Kailash Chand Jangir</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="container">
                        <p><i class="fa fa-quote-left"></i> I have been associated with Codelixsolution for the last 3 years and its been a great learning curve for me. The company values employees, and provide good growth opportunities. The best thing about is that your senior took the
                            initiative that you can learn something new and improve yourself. I will strongly recommend our company to people who are looking for great web/app designing and development. </p>
                            <div>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                            </div>
                        <h3>- Vishwakarma Metal </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="container">
                        <p><i class="fa fa-quote-left"></i> Best Astrology website designing and development Company. Highly recommend CODELIXSOLUTION. They are easy to work with. We had them go in and help improve the SEO for our website, and what an improvement! We started seeing results
                            almost immediately. If you want to grow your business, they are the ones to partner up with. 5 stars all the way! </p>
                            <div>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                                <span class="fa fa-star" style="color:orange;"></span>
                            </div>
                        <h3>- Jangir Timber</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials  End -->
    <!-- Contact Start -->
    
    <div class="about-section" style="text-align:center;">
        <h1>Get In Touch</h1>
    </div>
    <div class="container contact">
        <div class="row" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: #0a063b;">
            <div class="col-lg-6" style="padding:0;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.8390884479245!2d72.7311102149672!3d22.99294388496803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e7da5cf0ca6b5%3A0x29ccc46e98abd38f!2sCodelixsolution!5e0!3m2!1sen!2sin!4v1662141396689!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6 c-form">
                <h1>We'd love to here from you</h1>
                <form action="/action_page.php" class="clearfix">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    
                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="Give your valuable suggestion.."></textarea>
                    <input class="rounded-pill" type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </div>
    
    <!-- Contact End -->
    
    <!--footer start-->
    <?php 
        include './includes/footer.php';
    ?>
    <!--footer end-->

</body>

</html>
