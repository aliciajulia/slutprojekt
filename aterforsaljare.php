<?php
include 'connectDb.php';

$sql = "SELECT * FROM `aterforsaljare`";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();

$sql = "SELECT * FROM `info`";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$dataInfo = $stmt->fetchAll();

var_dump($data[1][3]);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BearHug - Återförsäljare</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="bearHug.css">
        <script src="bearHug.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="top">  
                <a href="index.html"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>
                <a href="www.google.se">Logga in</a>
            </div>

            <div id="nav">
                <ul>
                    <li ><a class="topLeft" href="index.php"><?php echo $dataInfo[1][1] ?></a></li>
                    <li><a  href="om.php"><?php echo $dataInfo[2][1] ?></a></li>
                    <li><a href="foretagside.php"><?php echo $dataInfo[3][1] ?></a>
                        <ul>
                            <li><a class="active" href="aterforsaljare.php"><?php echo $dataInfo[4][1] ?></a></li>
                            <li><a href="utbud.php"><?php echo $dataInfo[5][1] ?></a></li>
                        </ul>
                    </li>
                    <li ><a class="topRight" href="kontakt.php"><?php echo $dataInfo[6][1] ?></a></li>
                </ul>
            </div>

            <div id="content">

                <br>
                <br>
                <br>
                <br>
                <h2>På förjande ställen finns våra varor att inhandla.</h2>
                <div id="aterforsaljare1">
                    <div class="aterforsaljare"> <a href="http://www.ahlens.se/"><img src="<?php $data[0][3] ?>" alt="återförsäljare" ><h2>Åhléns</h2></a> </div>
                    <div class="aterforsaljare"><a href="http://www.ikea.se/"><img src="Bilder/rsz_ikea-logo.jpg" alt="återförsäljare"><h2>IKEA</h2></a></div>
                    <div class="aterforsaljare"><a href="http://www.ica.se/"><img src="Bilder/rsz_logo_supermarket0512.gif" alt="återförsäljare"><h2>ICA</h2></a></div>
                    <div class="aterforsaljare"><a href="http://www.stadium.se/"><img src="Bilder/rsz_stadium_logo.jpg" alt="återförsäljare"><h2>Stadium</h2></a></div>
                    <!--                    <h2>IKEA</h2><h2>ICA Supermarket</h2><h2>Stadium</h2>-->
                </div>
                <div id="aterforsaljare2">
                    <div class="aterforsaljare"><a href="http://www.teamsportia.se/"><img src="Bilder/rsz_teamsportia.png" alt="återförsäljare"> <h2>Team Sportia</h2></a></div>
                    <div class="aterforsaljare"><a href="http://www.toysrus.se/"><img src="Bilder/rsz_toys-r-us-logo.jpg" alt="återförsäljare"><h2>Toys R Us</h2></a></div>
                    <div class="aterforsaljare"><a href="http://www.hm.se/"><img src="Bilder/rsz_hm_logga700.jpg" alt="återförsäljare"><h2>H&amp;M</h2></a></div>
                    <div class="aterforsaljare"><a href="http://www.br-leksaker.se/"><img src="Bilder/rsz_0bd74be292ec564a8367341874d8a457.jpg" alt="återförsäljare"><h2>BR Leksaker</h2></a></div>
                    <!--                    <h2>Team Sportia</h2><h2>Toys R Us</h2><h2>H&M</h2><h2>BR Leksaker</h2>-->
                </div>
            </div>


            <div id="footer">

                <p> Bearhug is not a real company. This page was made as a school project.
                    Nothing displayed on this site is true. Hope you liked the website.
                    All images on this page are taken and edited by Alicia Broberg. <br> Pictures are protected
                    of the top Copyright Act.</p>
                <div id="icons">
                    <a href="http://www.google.se/"><img src="Bilder/1399910910_RSS.png" alt="icon"></a>
                    <a href="http://www.facebook.se/"><img src="Bilder/1399910863_Facebook.png" alt="icon"></a>
                    <a href="http://www.gmail.com/"><img src="Bilder/1399910919_Mail.png" alt="icon"></a>
                </div>
                <div id="logga">
                    <img src="Bilder/egna/BHlogo_2.png" alt="logga">
                </div>
            </div>
        </div>
    </body>
</html>

