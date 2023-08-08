<?php
    include './includes/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <title>Codelixsolution</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!--css link-->
    <link rel="stylesheet" href="./style/style.css">
    
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);
        /*for dancing script*/
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
    </style>
</head>

<body style="background-color:#EEEDE7 ;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;position: relative;">
    <!--header start-->
    <?php 
        include './includes/header.php';
    ?>
    <!--header end-->
    <!--section start-->
    <section style="margin: 120px 30px 30px 30px;">
    <div style="padding: 0 40px;">
        <h2>What is web Security, Cybersecurity?</h2>
        <p>Web security is also known as “Cybersecurity”. It basically means protecting {a website an internet site web
            site} or web application by detecting, preventing and responding to cyber threats.
            Websites and web applications are even as prone to security breaches as physical homes, stores, and
            government locations. Sadly, crime happens a day, and nice net security measures are required to protect net
            sites and net applications from turning into compromised.
            That’s exactly what web security does – it's a system of protection measures and protocols that can protect
            your website or web application from being hacked or entered by unauthorized personnel. This integral
            division of information Security is vital to the protection of websites, web applications, and web services.
            Anything that is applied over {the internet theweb the net} should have some form of web security to protect
            it.
        </p>
        <h2>Details of web Security:</h2>
        <p>There are a lot of things that go into web security and web protection. Any web site or application that's
            secure is surely backed by different types of checkpoints and techniques for keeping it safe.</p>
        <p>There are a variety of security standards that must be followed at all times, and these standards are
            implemented and highlighted by the OWASP. Most experienced web developers from high cybersecurity companies
            will follow the standards of the OWASP as well as keep a close eye on the web Hacking Incident database to
            see once, how, and why different completely different} folks are hacking different websites and services.
        </p>
        <p>Essential steps in protecting web apps from attacks include applying up-to-date encryption, setting proper
            authentication, continuously patching discovered vulnerabilities, avoiding data theft by having secure
            software development practices. The reality is that clever attackers may be competent enough to find flaws
            even in a fairly robust secured environment, and so a holistic security strategy is advised.</p>
        <h2>Available Technology:</h2>
        <p>There are different types of technologies available for maintaining the best security standards. Some popular
            technical solutions for testing, building, and preventing threats include:</p>
        <li>Black box testing tools</li>
        <li>Fuzzing tools</li>
        <li>White box testing tools</li>
        <li>Web application firewalls (WAF)</li>
        <li>Security or vulnerability scanners</li>
        <li>Password cracking tools</li>
        <h2>Likelihood of Threat</h2>
        <p>Your website or web application’s security depends on the level of protection tools that have been equipped
            and tested on it. There are a few major threats to security which are the most common ways in which {a
            website an internet site web site} or web application becomes hacked. Some of the highest vulnerabilities
            for all web-based services include:</p>
        <li> Password breach</li>
        <li>Cross-site scripting</li>
        <li>SQL injection</li>
        <li> Data breach</li>
        <li>Remote file inclusion</li>
        <li>Code injection</li>
        <p>Preventing these common threats is the key to making sure that your web-based service is practicing the best
            methods of security.</p>
        <h2>The Best strategies</h2>
        <p>There are 2 big defence strategies that a developer can use to protect their website or web application. The
            2 main strategies are as follows:</p>
        Resource assignment – By assigning all necessary resources to causes that are dedicated to alerting the
        developer about new web security issues and threats, the developer can receive a constant and updated alert
        system that will help them detect and eradicate any threats before security is officially breached.
        <li>Web scanning – There are several web scanning solutions already living that are available for purchase or
            transfer. These solutions, however, are only good for known vulnerability threats – seeking unknown threats
            can be much more complicated. This method can protect against many breaches, however, and is proven to keep
            websites safe in the long run.
        <li> Web Security also protects the visitors from the below-mentioned points –</li>
        <li> Stolen Data: Cyber-criminals oft hacks visitor’s data that's keep on a website like email addresses,
            payment information, and a few other details.</li>
        <li>Phishing schemes: this is not just related to email, but through phishing, hackers design a layout that
            looks specifically just like the web site to trick the user by compelling them to give their sensitive
            details.</li>
        <li> Session hijacking: certain cyber attackers will take over a user’s session and compel them to take
            undesired actions on a website.</li>
        <li> Malicious redirects. Sometimes the attacks can redirect visitors from the site they visited to a malicious
            website.</li>
        <li> SEO Spam. Unusual links, pages, and comments can be displayed on a site by the hackers to distract your
            visitors and drive traffic to malicious websites.</li>
        <li>
            Thus, net security is easy to put in and it also helps the business folks to make their website safe and
            secure. a web application firewall prevents machine-controlled attacks that sometimes target little or
            lesser-known websites. These attacks are borne out by malicious bots or malware that automatically scan for
            vulnerabilities they can misuse, or cause DDoS attacks that curtail or crash your web site.</li>
        <li> Thus, net security is very important, especially for net sites or web applications that influence
            confidential, private, or protected data. Security methods are evolving to match the different types of
            vulnerabilities that come into existence.</li>

    </div>
    </section>
    <!--section End-->
    <!--footer start-->
    <?php 
        include './includes/footer.php';
    ?>
    <!--footer end-->
</body>

</html>