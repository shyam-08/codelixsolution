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
            <h2>QR code</h2>
            <p>
                A QR code (an initialism for quick response code) is a type of matrix barcode (or two-dimensional barcode)[1][2] invented in 1994 by the Japanese automotive company Denso Wave. A barcode is a machine-readable optical label that can contain information
                about the item to which it is attached. In practice, QR codes often contain data for a locator, identifier, or tracker that points to a website or application. QR codes use four standardized encoding modes (numeric, alphanumeric, byte/binary,
                and kanji) to store data efficiently; extensions may also be used
            </p>
            <p>The Quick Response system became popular outside the automotive industry due to its fast readability and greater storage capacity compared to standard UPC barcodes. Applications include product tracking, item identification, time tracking,
                document management, and general marketing</p>
            <p>A QR code consists of black squares arranged in a square grid on a white background, including some fiducial markers, which can be read by an imaging device such as a camera, and processed using Reed–Solomon error correction until the image
                can be appropriately interpreted. The required data is then extracted from patterns that are present in both horizontal and vertical components of the image.</p>
            <h2>Adoption</h2>
            <p>QR codes are now used in a much broader context, including both commercial tracking applications and convenience-oriented applications aimed at mobile-phone users (termed mobile tagging). QR codes may be used to display text to the user, to
                open a webpage on the user's device, to add a vCard contact to the user's device, to open a Uniform Resource Identifier (URI), to connect to a wireless network, or to compose an email or text message. There are a great many QR code generators
                available as software or as online tools that are either free, or require a paid subscription.[10] The QR code has become one of the most-used types of two-dimensional code
            </p>
            <p>During the month of June 2011, 14 million American mobile users scanned a QR code or a barcode. Some 58% of those users scanned a QR or barcode from their homes, while 39% scanned from retail stores; 53% of the 14 million users were men between
                the ages of 18 and 34.</p>
            <p>In September 2020, a survey found that 18.8 percent of consumers in the United States and United Kingdom strongly agreed that they had noticed an increase of QR code use since the then-active COVID-19 related restrictions had begun several
                months prior</p>
            <h2>Uses</h2>
            <p>QR codes have become common in consumer advertising. Typically, a smartphone is used as a QR code scanner, displaying the code and converting it to some useful form (such as a standard URL for a website, thereby obviating the need for a user
                to type it into a web browser). QR code has become a focus of advertising strategy, since it provides a way to access a brand's website more quickly than by manually entering a URL.[19][20] Beyond mere convenience to the consumer, the
                importance of this capability is that it increases the conversion rate: the chance that contact with the advertisement will convert to a sale. It coaxes interested prospects further down the conversion funnel with little delay or effort,
                bringing the viewer to the advertiser's website immediately, whereas a longer and more targeted sales pitch may lose the viewer's interest.</p>
            <p>Although initially used to track parts in vehicle manufacturing, QR codes are used over a much wider range of applications. These include commercial tracking, entertainment and transport ticketing, product and loyalty marketing and in-store
                product labeling. Examples of marketing include where a company's discounted and percent discount can be captured using a QR code decoder which is a mobile app, or storing a company's information such as address and related information
                alongside its alpha-numeric text data as can be seen in Yellow Pages directories</p>
            <li>1 Augmented reality</li>
            <li> 2 Displaying multimedia contents</li>
            <li> 3 Mobile operating systems</li>
            <li> 4 Virtual stores</li>
            <li>5 QR code payment</li>
            <li>6 Website login</li>
            <li>7 Restaurant ordering</li>
            <li>8 Joining a Wi‑Fi network</li>
            <li>9 Funerary use</li>
            <li>10 Electronic authentication</li>
            <li>11 Video games</li>
            <li>12 Loyalty programs</li>
            <li>13 Counterfeit detection</li>
            <li>14 Product tracing</li>
            <h2>Design</h2>
            <p>Unlike the older, one-dimensional barcodes that were designed to be mechanically scanned by a narrow beam of light, a QR code is detected by a 2-dimensional digital image sensor and then digitally analyzed by a programmed processor. The processor
                locates the three distinctive squares at the corners of the QR code image, using a smaller square (or multiple squares) near the fourth corner to normalize the image for size, orientation, and angle of viewing. The small dots throughout
                the QR code are then converted to binary numbers and validated with an error-correcting algorithm.
            </p>
            <h2>Storage</h2>
            <p>The amount of data that can be stored in the QR code symbol depends on the data type (mode, or input character set), version (1, ..., 40, indicating the overall dimensions of the symbol, i.e. 4 × version number + 17 dots on each side), and
                error correction level. The maximum storage capacities occur for version 40 and error correction level L (low), denoted by 40-L</p>
            <h2>Encoding</h2>
            <p>The format information records two things: the error correction level and the mask pattern used for the symbol. Masking is used to break up patterns in the data area that might confuse a scanner, such as large blank areas or misleading features
                that look like the locator marks. The mask patterns are defined on a grid that is repeated as necessary to cover the whole symbol. Modules corresponding to the dark areas of the mask are inverted. The format information is protected from
                errors with a BCH code, and two complete copies are included in each QR symbol</p>
            <p>The message dataset is placed from right to left in a zigzag pattern, as shown below. In larger symbols, this is complicated by the presence of the alignment patterns and the use of multiple interleaved error-correction blocks.</p>
            <h2>Variants</h2>
            <h4>Model 1</h4>
            <li>Model 1 QR code is an older version of the specification. It is visually similar to the widely seen model 2 codes, but lacks alignment patterns. Differences are in the bottom right corner, and in the midsections of the bottom and right edges
                are additional functional regions.</li>
            <h4>Micro QR code </h4>
            <li>Micro QR code is a smaller version of the QR code standard for applications where symbol size is limited. There are four different versions (sizes) of Micro QR codes: the smallest is 11×11 modules; the largest can hold 35 numeric characters.</li>
            <h4>IQR code</h4>
            <li>IQR Code is an alternative to existing QR codes developed by Denso Wave. IQR codes can be created in square or rectangular formations; this is intended for situations where a rectangular barcode would otherwise be more appropriate, such as
                cylindrical objects. IQR codes can fit the same amount of information in 30% less space. There are 61 versions of square IQR codes, and 15 versions of rectangular codes. For squares, the minimum size is 9 × 9 modules; rectangles have a
                minimum of 19 × 5 modules. IQR codes add error correction level S, which allows for 50% error correction.[79] IQR Codes have not yet been given an ISO/IEC specification, and only proprietary Denso Wave products can create or read IQR codes.</li>
            <h4>Secure QR code</h4>
            <li>Secure Quick Response (SQR) code is a QR code that contains a "private data" segment after the terminator instead of the specified filler bytes "ec 11".[81] This private data segment must be deciphered with an encryption key. This can be used
                to store private information and to manage company's internal information.[82] SQR codes have been developed by the FORUS Foundation to enable secure transactions, and published under a Creative Commons Licence. The SQR solution guarantees
                the integrity of the source data as well as the validity of the originating party. The payment instruction string is made up of the electronic instruction data from the scanned QR code appended with a SHA-2 cryptographic hash. The message
                digest can then be encrypted using the private key of the sender, which then creates a digital signature of the message. This signature validates the integrity of the data and the trustworthiness of the sender. This provides non-repudiation,
                confirming the identity of the sender, and that it has not been tampered with during transmission. By embedding the URL and all the variables required to perform shopping cart type e-commerce, bill payment and peer to peer payments, coupled
                with a digital certificate eliminates the possibility of spoofing, tampering, and man in the middle attacks.</li>
            <h4>Frame QR</h4>
            <li>Frame QR is a QR code with a "canvas area" that can be flexibly used. In the center of this code is the canvas area, where graphics, letters, and more can be flexibly arranged, making it possible to lay out the code without losing the design
                of illustrations, photos, etc.</li>
            <h4>HCC2D</h4>
            <li>
                Samples of the High Capacity Colored 2-Dimensional (HCC2D) code: (a) 4-color HCC2D code and (b) 8-color HCC2D code. Researchers have proposed a new High Capacity Colored 2-Dimensional (HCC2D) Code, which builds upon a QR code basis for preserving the
                QR robustness to distortions and uses colors for increasing data density (as of 2014 it is still in prototyping phase). The HCC2D code specification is described in details in Querini et al. (2014),[85] while techniques for color classification
                of HCC2D code cells are described in detail in Querini and Italiano (2014),[86] which is an extended version of Querini and Italiano (2013)</li>
            <h4>JAB code</h4>
            <li>JAB code (Just Another Barcode) is a color 2D matrix symbology made of color squares arranged in either square or rectangle grids. It was developed by Fraunhofer Institute SIT (Secure Information Technology).[88] The code contains one primary
                symbol and optionally multiple secondary symbols. The primary symbol contains four finder patterns located at the corners of the symbol</li>

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