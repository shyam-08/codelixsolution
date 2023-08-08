<?php 
    include './includes/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <title>Privacy policy</title>
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
        
    </style>
</head>

<body style="position: relative;">
    <?php 
        include './includes/header.php';
    ?>
    
    <!-- full img Start -->
    <div class="col-lg-12" style="background-image: url(img/privacypolicy.png); height: 100vh; width: 100vw;position: relative;">
        <!--<button class=" btn-info" style="position: absolute; border-radius:30px;height: 70px;width: 200px; top: 50%;left: 110px;background: none; "><a href="" style="text-decoration: none;"><h3> Get In Touch</h3> </a></button>-->
    </div>
    <!-- Full img End -->
    <!-- About Start -->
    <div class="about-section" style="text-align:center">
        <h2 style="color: rgb(50, 50, 151);">Privacy Policy</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 img-fluid">
                <h3 style"text-align:center; font-weight:bold;">Privacy Policy of Codelixsolution</h3>
                <p>This Privacy Policy has been compiled to better serve those who are concerned with how their ‘Personally Identifiable Information’ (PII) is being used online. PII, as used in US privacy law and information security, is information that
                    can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our Privacy Policy carefully to get a clear understanding of how we collect, use,
                    protect or otherwise handle your Personally Identifiable Information in accordance with our website.</p>
               <hr>
                <h3 style="font-weight:bold;">What Personal Information Do We Collect from The People That Visit Our Website?</h3>
                <p>When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, mailing address, phone number or other details to help you with your experience.</p>
                <h5>When do We Collect Information?</h5>
                <h5 style="font-weight:bold;">We Collect Information from You when You</h5>
                <p>Fill out a form or enter information on our site.</p>
                <p>Provide us with feedback on our products or services.</p>
                <h5 style="font-weight:bold;">How do We Use Your Information?</h5>
                <p>We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways.</p>
                <p>To personalize user’s experience and to allow us to deliver the type of content and product offerings in which you are most interested.
                </p>
                <p>To allow us to better service you in responding to your customer service requests</p>
                <p>To follow up with them after correspondence (live chat, email or phone inquiries).</p>
                <hr>
                <h3 style="font-weight:bold;">How do We Protect Visitor Information?</h3>
                <p>Full Refund if the project is not started or the initial design is not approved.</p>
                <p>Partial Refund if the initial design is approved and you choose to close the project.</p>
                <p>No Refund would be entertained if the project has been completed and uploaded on the server.</p>
                <h5>Web Development / Mobile Apps Development:</h5>
                <p>Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible.</p>
                <h5 style="font-weight:bold;">We do not Use Malware Scanning.</h5>
                <p>Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all
                    sensitive/credit information you supply is encrypted via Secure Socket Layer (SSL) technology.</p>
                <p>We implement a variety of security measures when a user places an order enters, submits, or accesses their information to maintain the safety of your personal information.</p>
                <h5 style="font-weight:bold;">Do We Use ‘Cookies’?</h5>
                <h5 style="font-weight:bold;">We do not Use Cookies for Tracking Purposes</h5>
                <p>You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser (like Internet Explorer) settings. Each browser is a little different, so look
                    at your browser’s Help menu to learn the correct way to modify your cookies.</p>
                <p>If you disable cookies off, some features will be disabled that make your site experience more efficient and some of our services will not function properly.</p>
                <h5  style="font-weight:bold;">Third-party Links</h5>
                <p>We do not include or offer third-party products or services on our website.</p>
                <h5 style="font-weight:bold;">Google</h5>
                <p>Google’s advertising requirements can be summed up by Google’s Advertising Principles. They are put in place to provide a positive experience for users.</p>
                <p>Google, as a third-party vendor, uses cookies to serve ads on our site. Google’s use of the DART cookie enables it to serve ads to our users based on previous visits to our site and other sites on the Internet. Users may opt-out of the
                    use of the DART cookie by visiting the Google Ad and Content Network Privacy Policy.</p>
                <hr>
                <h3 style="font-weight:bold;">We Have Implemented The Following:</h3>
                <p>Demographics and Interests Reporting</p>
                <p>We along with third-party vendors, such as Google use first-party cookies (such as the Google Analytics cookies) and third-party cookies (such as the DoubleClick cookie) or other third-party identifiers together to compile data regarding
                    user interactions with ad impressions and other ad service functions as they relate to our website.</p>
                <h5 style="font-weight:bold;">We Agree to The Following:</h5>
                <h5 style="font-weight:bold;">Users Can Visit Our Site Anonymously.</h5>
                <p>Once this Privacy Policy is created, we will add a link to it on our home page or as a minimum on the first significant page after entering our website.</p>
                <p>Our Privacy Policy link includes the word ‘Privacy’ and can be easily be found on the page specified above.</p>
                <h5 style="font-weight:bold;">Users will be Notified of Any Privacy Policy Changes:</h5>
                <p>On Our Privacy Policy Page.</p>
                <h5 style="font-weight:bold;">Users are able to change their personal information:</h5>
                <p>By Emailing Us.</p>
                <hr>
                <h3 style="font-weight:bold;">How does Our Site Handle do not Track Signals?</h3>
                <p>We honor do not track signals and do not track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place</p>
                <h5 style="font-weight:bold;">Does Our Site Allow Third-party Behavioral Tracking?</h5>
                <p>It’s also important to note that we do not allow third-party behavioral tracking.</p>
                <h5 style="font-weight:bold;">Resolution of Disputes:</h5>
                <p>Any Disputes / Concerns related to this Refund Policy are subject to be processed under the Honorable High Court</p>
                <hr>
                <h3 style="font-weight:bold;">CAN SPAM Act</h3>
                <p>The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.</p>
                <p>We collec your email address in order to:</p>
                <p>Send information, respond to inquiries, and/or other requests or questions. To be in accordance with CANSPAM we agree to the following:</p>
                <p>NOT use false or misleading subjects or email addresses.</p>
                <p> Identify the message as an advertisement in some reasonable way.</p>
                <p>Include the physical address of our business or site headquarters.</p>
                <p>Monitor third-party email marketing services for compliance, if one is used.</p>
                <p>Honor opt-out/unsubscribe requests quickly.</p>
                <p>Allow users to unsubscribe by using the link at the bottom of each email.</h1>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    <?php 
        include './includes/footer.php';
    ?>
</body>

</html>