<?php
    include './includes/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISO CERTIFICATE</title>

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
        
        * {
            box-sizing: border-box;
        }
        
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
        <h1 style="position: absolute;color: #03045E;top: 60%;left: 70px;font-weight: bold; font-size: 38px;">ISO Certification</h1>
        <!--<button class=" btn-info" style="position: absolute; border-radius:30px;height: 50px;width: 160px; top: 50%;left: 110px;background: none; "><a href="" style="text-decoration: none;"><h3> Get In Touch</h3> </a></button>-->
    </div>
    <!-- Full img End -->
    <!-- About Start -->
    <div class="about-section" style="text-align:center">
        <h2 style="color: rgb(50, 50, 151);">International Standard Organization (ISO) Certification</h2>
    </div>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 img-fluid">
                <h2 style="text-align:center;">What is International Standard Organization (ISO) certification?.</h2>
                <p>International Standard Organization (ISO) certification is the quality management tool used to provide the identity to the product to reflect the company’s quality management system. It promotes worldwide standardization of specifications
                    and requirements for products, materials, formats, procedures, information, and quality management.</p>
                <p>ISO certification indicates that a product has complied with the requirements and specifications. Hence, it is a guarantee that ISO standards concerning the requirement and management has been completed.</p>
                <p>Moreover, it is an independent organization with authority to provide standards regarding the quality and safety of a product.</p>
                <hr>
                <h2 style="text-align:center;">Type of ISO Certification.</h2>
                <h3>There are various types of ISO certification are available such as listed below:</h3>
                <p>ISO 9001:2008- Quality Management System</p>
                <p>OHSAS 18001 – Occupational Health & Safety Management System</p>
                <p>ISO 37001 – Anti-bribery management systems</p>
                <p>ISO 31000 – Risk Management</p>
                <p>ISO 27001 – Information Security Management System</p>
                <p>ISO 10002 – Compliant Management System</p>
                <p>ISO 14001:2015 – Environment Management System</p>
                <p>ISO 26000 – Social Responsibility</p>
                <p>ISO 28000 – Security Management</p>
                <p>ISO 22008 – Food Safety Management</p>
                <p>SA 8000 – Social accountability</p>
                <p>EnMS EN 16001 ISO 50001 – Energy Management</p>
                <p>SO/IEC 17025 – Testing and calibration laboratories</p>
                <p>SO 13485 – Medical devices</p>
                <p>ISO 639 – Language codes</p>
                <p>ISO 4217 – Currency codes</p>
                <p>ISO 3166 – Country codes</p>
                <p>ISO 8601 – Date and time format</p>
                <p>ISO 20121 – Sustainable events</p>
                <p>SO/IEC 27001 – Information security management</p>
                <hr>
                <h2 style="text-align:center;">ISO Certification Body.</h2>
                <p>ISO only creates international standards. However, it is not engaged in ISO certification. In simpler words, external certification bodies perform the function of providing ISO certification. Yet, while choosing the appropriate body for
                    ISO certification, keep the below-mentioned points in consideration:</p>
                <p>Evaluate various ISO service providers.</p>
                <p>Check whether the ISO service provider is accredited or not. Though, being accredited is not mandatory and does not signify the service provider’s reputation. But importantly, it should meet the requirements of the standard.</p>
                <p>CASCO is an authority that publishes policy and develops standards. Thus, you must check whether certification bodies follow appropriate CASCO standards or not.</p>
                <hr>
                <h2 style="text-align:center;">ISO Certification Process.</h2>
                <p>You need to select the ISO standard and certification body and accordingly complete the form. The application should contain rights and obligations of entrepreneur and certification body parties and includes liability issues, confidentiality,
                 and access rights.</p>
                <p>The ISO appointed auditor will review all the quality manuals and documents related to various procedures and policies being followed in the organization. This will help the ISO registrar to review the existing works and identify the possible
                 p gaps against the requirements specified in the ISO standards.</p>
                <p>An action plan needs to be prepared to eradicate the gaps. Moreover, employees will require training to adopt the new procedures to improve efficiency.</p>
                <p>The auditing will be done in two stages. In stage-1, the ISO auditor will check the changes made by the applicant to find the potential non-conformities in the system and procedures. Then, an auditor will categorize the minor and major
                 non-conformities. In stage-2, the auditor will complete the auditing for the final time to check whether all the non-conformities are eradicated or not.</p>
                <p>Once a product satisfies the ISO standards, a final report will be made and forward to the registrar.</p>
                <p>If the product with stands the ISO standards and requirements, a certificate will be generated.</p>
                <hr>
                <h2 style="text-align:center;">Documents Required to Obtain ISO Certificate in India.</h2>
                <p>Address proof, it could be Passport, Aadhar card, DL, or Voter ID card.Replica of PAN card.</p>
                <p>Company Letterhead.</p>
                <p>A replica of the sales bill and purchase bill.</p>
                <p>Visiting Card.</p>
                <p>Company Profile.</p>
                <hr>
                <h2 style="text-align:center;">How Would the PRP Group Assist You with the ISO Certification?.</h2>
                <p>We guarantee to assist you in the entire process of ISO certification.Our ISO certification consultants will assist you with the necessary documentation for ISO certification.Our experts will guide you to clear the auditing effortlessly.The
                    experts would educate you regarding the specific kind of ISO certification required for your organization.We guarantee to assist you in clearing the surveillance audit process as prescribed by ISO.Provide you the technical and non-technical
                    support needed to get the certification.Our consultants will be available 24*7 to make sure the clients get what they expect from us and get all your queries answered immediately.</p>
                <hr>
                <h2 style="text-align:center;">Summary..</h2>
                <p>We assist the manufacturers from various industries to get their products certified from BIS India.PRP Group is working with clients across the global, and the team of our experts make sure that the global certification and approval process
                    is easy for all.Contact our experts and professional services now.</p>
            </div>
        </div>
        <!-- About End -->
        </div>
         <!--footer start-->
    <?php 
        include './includes/footer.php';
    ?>
    <!--footer end-->
</body>

</html>