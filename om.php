<?php
include 'connectDb.php';

$sql = "SELECT * FROM `info`";
$stmt = $dbh->prepare($sql);
//    $stmt->bindParam(":anvnam", $anvnam);
//    $stmt->bindParam(":losord", $losord);
$stmt->execute();
$dataInfo = $stmt->fetchAll();
//    var_dump($dataInfo);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BearHug - Om</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="bearHug.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="top"> 
                <a href="index.php"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>
                <a href="www.google.se">Logga in</a>
            </div>

            <div id="nav">
                <ul>
                    <li ><a class="topLeft" href="index.php"><?php echo $dataInfo[1][1] ?></a></li>
                    <li><a class="active" href="om.php"><?php echo $dataInfo[2][1] ?></a></li>
                    <li><a href="foretagside.php"><?php echo $dataInfo[3][1] ?></a>
                        <ul>
                            <li><a href="aterforsaljare.php"><?php echo $dataInfo[4][1] ?></a></li>
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
                <h1>The Persons Behind BearHug</h1>
                <br>
                <div class="colums_om">
                    <h2>CEO - Alicia Broberg</h2>
                    <img src="Bilder/egna/bild 4.JPG" alt="aliciaBroberg">
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                </div>

                <div class="colums_om">
                    <h2>Economy Director - Rebecka Ekström</h2>
                    <img src="Bilder/egna/bild 3.JPG" alt="rebeckaEkström">
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                </div>

                <div class="colums_om">
                    <h2>PR Director - Lovisa Schenning</h2>
                    <img src="Bilder/egna/bild 2.JPG" alt="lovisaSchenning">
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                </div>


                <div class="colums_om">
                    <h2>Market Manager - Martin Benno Klevbrand</h2>
                    <img src="Bilder/egna/bild 1.JPG" alt="martinBenno">
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                </div>
                <p> </p>
            </div>
            <?php
            include 'footer.php';
            ?>
            <!--            <div id="footer">
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
                        </div>-->
        </div>
    </body>
</html>


