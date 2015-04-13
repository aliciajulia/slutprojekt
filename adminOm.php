<?php
//
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "alicia");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
session_start();
if ($_SESSION['inlog'] == 1) {
//var_dump($_SESSION);
//    hämta hem texter från db för att kunna skriva ut dom i formulären
    $sql = "SELECT * FROM `om`";
    $stmt = $dbh->prepare($sql);
//    $stmt->bindParam(":anvnam", $anvnam);
//    $stmt->bindParam(":losord", $losord);
    $stmt->execute();
    $data = $stmt->fetchAll();
//    var_dump($data["0"]["content"]);
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
                    <a href="index.html"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>

                </div>

                <div id="nav">
                    <ul>
                        <li ><a class="topLeft" href="adminIndex.php">Homepage</a></li>
                        <li><a class="active" href="adminOm.php">About</a></li>
                        <li><a href="foretagside.html">Business Idea</a>
                            <ul>
                                <li><a href="aterforsaljare.html">Resellers</a></li>
                                <li><a href="utbud.html">Product Range</a></li>
                            </ul>
                        </li>
                        <li ><a class="topRight" href="kontakt.html">Contact</a></li>
                    </ul>
                </div>
                <div id="content">
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php
                    echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='h1' name='content'> 
                        <input type='hidden' name='id' value='h1'>
                        <input type='hidden' name='om' value='om'>
                            </form>";
                    ?>
                    <!--<h1>The Persons Behind BearHug</h1>-->
                    <div class = "colums_om">
                        <!--<br>-->
                        <?php
                        echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='h2-1' name='content'> 
                        <input type='hidden' name='id' value='h2-1'>
                        <input type='hidden' name='om' value='om'>
                            </form>";
//                    <h2>CEO - Alicia Broberg</h2>
//                    <img src = "Bilder/egna/bild-4.JPG" alt = "aliciaBroberg">
                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="p1">
                            <input type="hidden" name="id" value="p-1">
                            <input type="hidden" name="om" value="om">
                        </form>';

//                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                        ?>
                    </div>
                    <div class="colums_om">
                        <?php
                        echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='h2-2' name='content'> 
                        <input type='hidden' name='id' value='h2-2'>
                        <input type='hidden' name='om' value='om'>
                            </form>";
//                    <h2>CEO - Alicia Broberg</h2>
//                    <img src = "Bilder/egna/bild-4.JPG" alt = "aliciaBroberg">
                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="p2">
                            <input type="hidden" name="id" value="p-2">
                            <input type="hidden" name="om" value="om">
                        </form>';

//                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                        ?>
                        <!--                        <h2>Economy Director - Rebecka Ekström</h2>
                                                <img src="Bilder/egna/bild-3.JPG" alt="rebeckaEkström">-->
                                                <!--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>-->
                    </div>

                    <div class="colums_om">
                        <?php
                        echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='h2-3' name='content'> 
                        <input type='hidden' name='id' value='h2-3'>
                        <input type='hidden' name='om' value='om'>
                            </form>";
//                    <h2>CEO - Alicia Broberg</h2>
//                    <img src = "Bilder/egna/bild-4.JPG" alt = "aliciaBroberg">
                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="p3">
                            <input type="hidden" name="id" value="p-3">
                            <input type="hidden" name="om" value="om">
                        </form>';

//                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                        ?>
                        <!--<h2>PR Director - Lovisa Schenning</h2>-->
                        <!--<img src="Bilder/egna/bild-2.JPG" alt="lovisaSchenning">-->
                        <!--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>-->
                    </div>


                    <div class="colums_om">
                        <?php
                        echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='h2-4' name='content'> 
                        <input type='hidden' name='id' value='h2-4'>
                        <input type='hidden' name='om' value='om'>
                            </form>";
//                    <h2>CEO - Alicia Broberg</h2>
//                    <img src = "Bilder/egna/bild-4.JPG" alt = "aliciaBroberg">
                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="p4">
                            <input type="hidden" name="id" value="p-4">
                            <input type="hidden" name="om" value="om">
                        </form>';

//                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                        ?>
                        <!--<h2>Market Manager - Martin Benno Klevbrand</h2>-->
                        <!--<img src="Bilder/egna/bild-1.JPG" alt="martinBenno">-->
                        <!--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>-->
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
        </body>
    </html>
    <?php
}