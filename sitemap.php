<?php
    include './includes/conn.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codelix Solution</title>
    
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
        /* The actual timeline (the vertical ruler) */
        
        section .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }
        /* The actual timeline (the vertical ruler) */
        
        section .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: white;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }
        /* Container around content */
        
        .con {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
            margin:0;
        }
        /* The circles on the timeline */
        
        .con::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -13px;
            background-color: white;
            border: 4px solid #FF9F55;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        /* Place the container to the left */
        
        .left {
            left: 0;
        }
        /* Place the container to the right */
        
        .right {
            left: 50%;
        }
        /* Add arrows to the left container (pointing right) */
        
        .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }
        /* Add arrows to the right container (pointing left) */
        
        .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }
        /* Fix the circle for containers on the right side */
        
        .right::after {
            left: -16px;
        }
        /* The actual content */
        
        .content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
        }
        /* Media queries - Responsive timeline on screens less than 600px wide */
        
        @media screen and (max-width: 600px) {
            /* Place the timelime to the left */
            .timeline::after {
                left: 31px;
            }
            /* Full-width containers */
            .container {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            /* Make sure that all arrows are pointing leftwards */
            .container::before {
                left: 60px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }
            /* Make sure all circles are at the same spot */
            .left::after,
            .right::after {
                left: 15px;
            }
            /* Make all right containers behave like the left ones */
            .right {
                left: 0%;
            }
        }
    </style>
</head>

<body>
    <!--header start-->
    <?php 
        include './includes/header.php';
    ?>
    <!--header end-->
<section style="background-color: black;font-family: Helvetica, sans-serif;padding-top:120px;padding-bottom:30px;">

    <div class="timeline">
        <div class="container left con">
            <div class="content">
                <h2>CODELIXSOLUTION</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h3>The Company</h3>
                            <p>Who We Are</p>
                            <p>Infrastructure</p>
                            <p>Contact Us</p>
                            <p>Hiring</p>
                        </div>
                        <div class="col-md-6">
                            <h3>The Biorhythm</h3>
                            <p>Testimonials</p>
                            <p>Privacy Policy</p>
                            <p>Terms & Conditions</p>
                            <p>Sitemap</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container right con">
            <div class="content">
                <h2>IT Service</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h3>Web Development</h3>
                            <p>Coding</p>
                            <p>Wordpress</p>
                            <p>Wix</p>
                        </div>
                        <div class="col-md-6">
                            <h3>App Development</h3>
                            <p>Android</p>
                            <p>Ios</p>
                            <p>Cross Platform</p>
                            <h3>Security</h3>
                            <p>Hosting Security</p>
                            <p>Data Security</p>
                            <p>URL Security</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container left con">
            <div class="content">
                <h2>Digital Marketing</h2>
                <div class="col-md-6">
                    <h3>Social Service</h3>
                    <p>Google Ads</p>
                    <p>Instagram Ads</p>
                    <p>Facebook Ads</p>
                    <p>Snapchat Ads</p>
                    <h3>Graphic Design</h3>
                    <p>Web Design</p>
                    <p>App Design</p>
                    <p>Logo Design</p>
                    <p>Brocher Design</p>
                    <p>Catalog Design</p>
                    <p>Business Card</p>
                    <p>Post Design</p>
                    <h3>Seo</h3>
                    <p>Analytics Keyword</p>
                    <p>Select Keyword</p>
                    <p>Apply Keyword</p>
                </div>
            </div>
        </div>
        <div class="container right con">
            <div class="content">
                <h2>Consultant Service</h2>
                <p>BIS Certification (CRS)</p>
                <p>WPC Certification</p>
                <p>CE Certification</p>
                <p>ROHS Certification</p>
                <p>FCC Certification</p>
                <p>BEE Certification</p>
                <p>Legal Metrology</p>
                <p>ISO Certification</p>
                <p>All Types of NABL Testing</p>
                <p>TEC Certification</p>
                <p>EPR Authorization</p>
            </div>
        </div>
        <div class="container left con">
            <div class="content">
                <h2>Hire Team</h2>
                <p>Hire Website Designer</p>
                <p>Hire App Developer</p>
                <p>Hire Security</p>
                <p>Hire Digital Marketing</p>
                <p>Hire Digital Service</p>
                <p>Hire Graphic Design</p>
                <p>Hire Social Marketing</p>
            </div>
        </div>
    </div>
</section>
    <!--footer start-->
    <?php 
        include './includes/footer.php';
    ?>
    <!--footer end-->
</body>

</html>