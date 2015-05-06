<?php
include 'connectDb.php';

    $sql = "SELECT * FROM `info`";
    $stmt = $dbh->prepare($sql);
//    $stmt->bindParam(":anvnam", $anvnam);
//    $stmt->bindParam(":losord", $losord);
    $stmt->execute();
    $dataInfo = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BearHug</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="bearHug.css">
        <script src="JS/bearHug.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="top"> 
                <a href="index.html"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>
                <a href="login.php">Logga in</a>
            </div>

            <div id="nav">
                <ul>
                    <li ><a class="topLeft active" href="index.php"><?php echo $dataInfo[1][1] ?></a></li>
                    <li><a href="om.php"><?php echo $dataInfo[2][1] ?></a></li>
                    <li><a href="foretagside.php"><?php echo $dataInfo[3][1] ?></a>
                        <ul>
                            <li><a href="aterforsaljare.php"><?php echo $dataInfo[4][1] ?></a></li>
                            <li><a href="utbud.php"><?php echo $dataInfo[5][1] ?></a></li>
                        </ul>
                    </li>
                    <li ><a class="topRight" href="kontakt.php"><?php echo $dataInfo[6][1] ?></a></li>
                </ul>
            </div>
            <div class="header">
                <ul>
                    <li><img src="Bilder/egna/ett.jpg" alt="slideshow"></li>
                    <li><img src="Bilder/egna/tva.jpg" alt="slideshow"></li>
                    <li><img src="Bilder/egna/tre.jpg" alt="slideshow"></li>
                    <li><img src="Bilder/egna/fyra.jpg" alt="slideshow"></li>
                </ul>
            </div>

            <div id="content">
                <div class="index_tre">
                    <h1>Be a part of us</h1>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                    <button>Read More..
                    </button>

                </div>
                <div class="index_tre">
                    <h1>Our vison</h1>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                    <button>Read More..
                    </button>
                </div>
                <div class="index_tre">
                    <h1>Get a cute teddy bear</h1>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                    <button>Read More..
                    </button>
                </div>
                <p> </p>
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

        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>-->
        <!--        <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>-->

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://unslider.com/unslider.min.js"></script>

        <script src="JS/bearHugSlider.js"></script>
    </body>
</html>
