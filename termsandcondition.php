<?php 
    include './includes/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact Us</title>
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
            margin: 0;
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
    <div class="col-lg-12" style="background-image: url(img/termsconditions.jpeg); height: 100vh; width: 100vw;position: relative;">
        <h1 style="position: absolute;top: 50%;left: 160px;font-weight: bold;color:#03045E ;font-size: 75px;">Terms & Conditions...</h1>
        <!--<button class=" btn-info" style="position: absolute; border-radius:30px;height: 70px;width: 200px; top: 70%;left: 160px;background: none; "><a href="" style="text-decoration: none;"><h3> Get In Touch</h3> </a></button>-->
    </div>
    <!-- Full img End -->
    <!-- About Start -->
    <div class="about-section" style="text-align:center">
        <h2 style="color: rgb(50, 50, 151);">Terms & Conditions</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-weight:bold;">Codelixsolution</h1>
                <p>These terms and conditions outline the rules and regulations for the use of Codelixsolution Website.</p>
                <p>By accessing this website, we assume you accept these terms and conditions in full. Do not continue to use Codelixsolution website if you do not accept all of the terms and conditions stated on this page.</p>
                <p>The following terminology applies to these Terms and Conditions, Privacy Policy and Disclaimer Notice and any or all Agreements: “Client”, “You” and “Your” refers to you, the person accessing this website and accepting the Company’s terms
                    and conditions. “The Company”, “Ourselves”, “We”, “Our” and “Us”, refers to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves, or either the Client or ourselves. All terms refer to the offer, acceptance
                    and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting
                    the Client’s needs in respect of provision of the Company’s stated services/products, in accordance with and subject to, prevailing law of India. Any use of the above terminology or other words in the singular, plural, capitalization
                    and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
               <hr>
              
                <h3 style="font-weight:bold;">License</h3>
                <p>Unless otherwise stated, Codelixsolution and/or it’s licensors own the intellectual property rights for all material on Codelixsolution All intellectual property rights are reserved. You may view and/or print pages from Codelixsolution.com
                    for your own personal use subject to restrictions set in these terms and conditions.</p>
                
                <hr>
                <h3 style="font-weight:bold;">You Must Not:</h3>
                <p>Republish material from Codelixsolution.com</p>
                <p>Sell, rent or sub-license material from Codelixsolution.com</p>
                <p>Reproduce, duplicate or copy material from Codelixsolution.com</p>
                <p>Redistribute content from Codelixsolution (unless content is specifically made for redistribution).</p>
                <hr>
                
                <h3 style="font-weight:bold;">User Comments</h3>
                <p>This Agreement shall begin on the date hereof.</p>
                <p>Certain parts of this website offer the opportunity for users to post and exchange opinions, information, material and data (‘Comments’) in areas of the website. Codelixsolution does not screen, edit, publish or review Comments prior to
                    their appearance on the website and Comments do not reflect the views or opinions of Codelixsolution, its agents or affiliates. Comments reflect the view and opinion of the person who posts such view or opinion. To the extent permitted
                    by applicable laws Codelixsolution shall not be responsible or liable for the Comments or for any loss cost, liability, damages or expenses caused and or suffered as a result of any use of and/or posting of and/or appearance of the
                    Comments on this website.</p>
                <p>Codelixsolution reserves the right to monitor all Comments and to remove any Comments which it considers in its absolute discretion to be inappropriate, offensive or otherwise in breach of these Terms and Conditions.</p>
                <p>You warrant and represent that.</p>
                <p>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so.</p>
                <p>The Comments do not infringe any intellectual property right, including without limitation copyright, patent or trademark, or other proprietary right of any third party.</p>
                <p>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material or material which is an invasion of privacyany third party.</p>
                <p>You hereby grant to Xtreem Solution a non-exclusive royalty-free license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
                <hr>
                
                <h3 style="font-weight:bold;">Iframes</h3>
                <p> Without prior approval and express written permission, you may not create frames around our Web pages or use other techniques that alter in any way the visual presentation or appearance of our Website.</p>
                
                <hr>
                <h3 style="font-weight:bold;">Content Liability</h3>
                <p> We shall have no responsibility or liability for any content appearing on your Web site. You agree to indemnify and defend us against all claims arising out of or based upon your Website. No link(s) may appear on any page on your Web site
                    or within any context containing content or materials that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
                
                <hr>
                <h3 style="font-weight:bold;">Reservation of Rights</h3>
                <p> We reserve the right at any time and in its sole discretion to request that you remove all links or any particular link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also reserve the right
                    to amend these terms and conditions and its linking policy at any time. By continuing to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.</p>
               <hr>
               
                <h3 style="font-weight:bold;">Removal of Links from Our Website</h3>
                <p> If you find any link on our Web site or any linked web site objectionable for any reason, you may contact us about this. We will consider requests to remove links but will have no obligation to do so or to respond directly to you.
                    <p>Whilst we endeavor to ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we commit to ensuring that the website remains available or that the material on the website is kept
                        up to date.
                <hr>        
                        
                        <h3 style="font-weight:bold;">Disclaimer</h3>
                        <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect
                            of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer will:</p>
                        <p>limit or exclude our or your liability for death or personal injury resulting from negligence.</p>
                        <p>limit or exclude our or your liability for fraud or fraudulent misrepresentation.</p>
                        <p> Associations or other groups representing charities, including charity giving sites.</p>
                        <p>exclude any of our or your liabilities that may not be excluded under applicable law.</p>
                        <p>The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or in relation to the
                            subject matter of this disclaimer, including liabilities arising in contract, in tort (including negligence) and for breach of statutory duty. To the extent that the website and the information and services on the website are
                            provided free of charge, we will not be liable for any loss or damage of any nature.</p>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Slider Start -->


    <!-- service End -->
    
    <!--footer start-->
    <?php 
        include './includes/footer.php';
    ?>
    <!--footer end-->
</body>

</html>