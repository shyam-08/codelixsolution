<?php
    include './includes/conn.php';
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPC CERTIFICATE</title>

    <link rel="icon" type="image/x-icon" href="img/logo.jpg">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>


    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu+Mono&family=Ubuntu:wght@300&display=swap" rel="stylesheet">


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
             font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            /*padding: 20px 10px;*/
        }
        
        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }
        
        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }
        
        .header a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .header a.active {
            background-color: #f1f1f1;
            color: black;
        }
        
        .header-right {
            float: right;
        }
        
        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            .header-right {
                float: none;
            }
        }
        /* Hedar End */
        /* Dropdown Start */
        
        .dropbtn {
            background-color: #f1f1f1;
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        
        .dropdown {
            /* position: relative; */
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown-content a:hover {
            background-color: #ddd;
            z-index: 100;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown:hover .dropbtn {
            background-color: #a9b0b1;
        }
        /* Drowdown end */
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
    <div class="col-lg-12" style="background-image: url(img/bg011.jpeg); height: 100vh; width: 100vw;position: relative;">
        <h1 style="position: absolute;color: #03045E;top: 60%;left: 70px;font-weight: bold; font-size: 38px;">Wireless Planning and Coordination</h1>
        <!--<button class=" btn-info" style="position: absolute; border-radius:30px;height: 50px;width: 170px; top: 50%;left: 110px;background: none; "><a href="" style="text-decoration: none;"><h3> Get In Touch</h3> </a></button>-->
    </div>
    <!-- Full img End -->
    <!-- About Start -->
    <div class="about-section" style="text-align:center">
        <h2 style="color: rgb(50, 50, 151);">Wpc Certificate</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 img-fluid">
               
                <h3  style="text-align:center;">What is WPC (Wireless Planning and Coordination)?.</h3>
                <p>Wireless Planning and Coordination is a national broadcasting authority and a segment of the Department of Telecommunications (DoT) discovered in 1985 under the Ministry of Communications and Information Technology.</p>
                <p>WPC provides the certification to the manufacturer to produce, sell, and import the wireless equipment under DoT. Without WPC certification manufacturer can’t produce, sell, or import products in Indian market.</p>
               <hr>
                <h3  style="text-align:center;"> What is the primary task of WPC?.</h3>
                <p>The primary task is to allocate and monitor the radio frequency spectrum and issue the radio license. This is done to ensure that the products are safe and secure.</p>
               <hr>
                <h3  style="text-align:center;">Approvals Issues By WPC.</h3>
                <ol>
                <li>Equipment Type Approval (ETA)</li>
                <p>A manufacturer must obtain an ETA certificate to function in the de-licensed frequency range. If your product has been operating under prescribed frequency (license-free status), then you are not required to obtain the WPC certification.
                </p>
                
                <li>How to obtain ETA approval?</li>
                <p>You are required to submit the application along with the radio test report accredited by the certified laboratory to obtain the ETA certificate. Some of the products that require ETA approval include:</p>
                <p>Mobile phones</p>
                <p>Bluetooth devices</p>
                <p>Wi-Fi technology</p>
                <p>RFID and others</p>
                <p>Demonstration License</p>
                <p>This non-network type license is required to demonstrate the wireless equipment. It is mandatory that the demonstration of the wireless equipment be carried on the particular frequency. You should have a justifiable Dealer Possession License</p>
                <p>(DPL), before you apply for a demonstration license. </p>
                
                <li>Experimental License</li>
                <p>It is mandatory to obtain experimental license to conduct the experiment on the wireless equipment; it is a network type license. Before acquiring the experimental license, you are required to possess the DPL license.</p>
                <p>Internet Service Provider (ISP) License</p>
                <p>Companies that provide internet services in India must possess ISP license. ISP license has been divided into three categories depending on the area and scale of the range: </p>
                <p>Category A: Can provide services all across the country. </p>
                <p>Category B: Can provide services in 20 Territorial Telecom Circles, metro cities, and cities Ahmedabad, Pune, Hyderabad, and Bangalore. </p>
                <p>Category C: Can provide services in DOT-defined Secondary Switching Areas (SSA).</p>
            
                <li>Dealer Possession License (DPL)</li>
                <p>DPL is issued to the distributors or dealers of the wireless products. This license is to impede individuals and firms from transferring, selling, and possessing wireless devices or lookalike equipment to other companies or individuals</p>
                <p> without a justifiable license. Obtaining the DPL could be tedious, but PRP group experts make it as easy as cakewalk.</p>
                
                <li>Non-Dealer Possession License (NDPL)</li>
                <p>NDPL is issued to the individual or firm, who is neither a dealer nor possesses any WPC license. NDPL is exact opposite of the DPL. </p>
                
                <li>Import License</li>
                <p>This license is issued to allow the manufacturer to import their products in India. It also includes a quota to establish the number of products that can be imported under a specific license. </p>
               </ol>
                <hr>
                <h2 style="text-align:center;"> Mandatory Products Under WPC.</h2>
                <ul>
                <li>Wireless keyboards</li>
                <li>Wi-Fi router</li>
                <li>Wireless mouse</li>
                <li>Wi-Fi smartwatch</li>
                <li>Wireless Nano USB</li>
                <li>Hotspot devices</li>
                <li>Wireless terminal</li>
                <li>Bluetooth headphones</li>
                <li>Wireless pen drives</li>
                <li>Wireless POS terminal</li>
                <li>Wireless speaker, and others</li>
                </ul>
                <p>Note- For each type of product, there would be individual tests.</p>
                <hr>
                <h2 style="text-align:center;">Systematic Process to Obtain WPC Approval.</h2>
                <li>Complete the registration form along with the required documents.</li>
                <li>Pay the registration fee while submitting the form.</li>
                <li>Once registration has been completed, the products will be tested to ensure they met the prescribed standards.</li>
                <li>If a product withstands the prescribed standards; the license will be provided.</li>
                <li>To be noted, a factory inspection is not required to obtain a WPC certificate.</li>
                <hr>
                <h2 style="text-align:center;">Our Role in WPC Approval.</h2>
                <li>Our consultants will educate you about all the aspects of WPC application and approval.</li>
                <li>We will assist you with the WPC registration form to prevent any error in the application form.</li>
                <li>Our team will assist you with forms, documentation, evaluation, and other processes related to WPC.</li>
                <li>We will directly coordinate with the laboratory to ensure proper acknowledgment as well as follow-ups to ensure proper testing of the equipment.</li>
                <li>Our expert team will be available 24*7 to assist you with any queries.</li>
               <hr>
                <h2 style="text-align:center;">Conclusion.</h2>
                <p>Acquiring WPC approvals could be tedious, but is essential for manufacturer to produce, sell, or import wireless equipment in India.</p>
                <p>Codelixsolution has a team of professional and experienced consultants, who are capable of making the process of obtaining WPC approval unchallenging for you.</p>
                <p>Contact us immediately to get assistance with WPC approval.</p>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!--footer start-->
    <?php 
        include './includes/footer.php';
    ?>
    <!--footer end-->
</body>

</html>