<?php
include 'connectDb.php';

session_start();
if ($_SESSION['inlog'] == 1) {

    //    hämta hem texter från db för att kunna skriva ut dom i formulären
    $sql = "SELECT * FROM `utbud`";
    $stmt = $dbh->prepare($sql);
//    $stmt->bindParam(":anvnam", $anvnam);
//    $stmt->bindParam(":losord", $losord);
    $stmt->execute();
    $data = $stmt->fetchAll();
//    var_dump($data);
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>BearHug - Utbud</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="reset.css">
            <link rel="stylesheet" href="colorbox.css">
            <link rel="stylesheet" href="bearHug.css">

        </head>
        <body>
            <div id="wrapper">
                <div id="top">
                    <a href="index.html"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>
                    <a href="doLogout.php">Logga ut</a>
                </div>

                <div id="nav">
                    <ul>
                        <li ><a class="topLeft" href="adminIndex.php">Homepage</a></li>
                        <li><a href="adminOm.php">About</a></li>
                        <li><a href="adminForetagside.php">Business Idea</a>
                            <ul>
                                <li><a href="adminAterforsaljare.php">Resellers</a></li>
                                <li><a class="active" href="adminUtbud.php">Product Range</a></li>
                            </ul>
                        </li>
                        <li ><a class="topRight" href="adminKontakt.php">Contact</a></li>
                    </ul>
                </div>


                <div id="content">
                    <div id="content_boxar">
                        <br><br><br>
                        <!--VARA 1-->
                        <div class="vara">
                            <?php
                            echo '<form method="POST" action="doUpdate.php">
                            <input type="text" name="content" value="'.$data["0"]["1"].'">
                            <input type="hidden" name="id" value="h1-1">
                            <input type="hidden" name="tabel" value="utbud">
                        </form>';
                            ?>
                            <br>
                            <!--<h1>Dog</h1>-->
                            <img src="Bilder/egna/DSC_0004.jpg" alt="hund">
                            <a class="btn_popUp" href="#pop_up_dog">More info</a>
                            <div class="pop_up">
                                <div id="pop_up_dog" class="animal">
                                    <img src="Bilder/egna/DSC_0004.jpg" alt="hund">
                                    <h1>Dog</h1>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>

                                </div>
                            </div>
                        </div>
                        <!--VARA 2-->
                        <div class="vara">
                            <?php
                            echo '<form method="POST" action="doUpdate.php">
                            <input type="text" name="content" value="'.$data["1"]["1"].'">
                            <input type="hidden" name="id" value="h1-2">
                            <input type="hidden" name="tabel" value="utbud">
                        </form>';
                            ?>
                            <br>
                            <!--<h1>Dolphin</h1>-->  
                            <img src="Bilder/egna/DSC_0010.jpg" alt="delfin">
                            <a class="btn_popUp" href="#pop_up_dolphin">More info</a>

                            <div class="pop_up">
                                <div id="pop_up_dolphin" class="animal">
                                    <img src="Bilder/egna/DSC_0010.jpg" alt="delfin">
                                    <h1>Dolphin</h1>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                                </div>
                            </div>
                            <!--VARA 3-->
                        </div>
                        <div class="vara">
                            <?php
                            echo '<form method="POST" action="doUpdate.php">
                            <input type="text" name="content" value="'.$data["2"]["1"].'">
                            <input type="hidden" name="id" value="h1-3">
                            <input type="hidden" name="tabel" value="utbud">
                        </form>';
                            ?>
                            <br>
                            <!--<h1>Elephant</h1>--> 
                            <img src="Bilder/egna/DSC_0047.jpg" alt="elefant">
                            <a class="btn_popUp" href="#pop_up_elephant">More info</a>

                            <div class="pop_up">
                                <div id="pop_up_elephant" class="animal">
                                    <img src="Bilder/egna/DSC_0047.jpg" alt="elefant">
                                    <h1>Elephant</h1>
                                    <p> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                                </div>
                            </div>
                            <!--VARA 4-->
                        </div>
                        <div class="vara">
                            <?php
                            echo '<form method="POST" action="doUpdate.php">
                            <input type="text" name="content" value="'.$data["3"]["1"].'">
                            <input type="hidden" name="id" value="h1-4">
                            <input type="hidden" name="tabel" value="utbud">
                        </form>';
                            ?>
                            <br>
                            <!--<h1>Sheep</h1>--> 
                            <img src="Bilder/egna/DSC_0031.jpg" alt="får">
                            <a class="btn_popUp" href="#pop_up_sheep">More info</a>

                            <div class="pop_up">

                                <div id="pop_up_sheep" class="animal">
                                    <img src="Bilder/egna/DSC_0031.jpg" alt="får">
                                    <h1>Sheep</h1>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p> 
                                </div>
                            </div>
                            <!--VARA 5-->
                        </div>
                        <div class="vara">
                            <?php
                            echo '<form method="POST" action="doUpdate.php">
                            <input type="text" name="content" value="'.$data["4"]["1"].'">
                            <input type="hidden" name="id" value="h1-5">
                            <input type="hidden" name="tabel" value="utbud">
                        </form>';
                            
                            ?>
                            <br>
                            <!--<h1>Guinea-pig</h1>--> 
                            <img src="Bilder/egna/DSC_0061.jpg" alt="marsvin">
                            <a class="btn_popUp" href="#pop_up_guinea-pig"> More info</a>

                            <div class="pop_up">
                                <div id="pop_up_guinea-pig" class="animal">
                                    <img src="Bilder/egna/DSC_0031.jpg" alt="får">
                                    <h1>Guninea-pig</h1>
                                    <p> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                                </div>
                            </div>
                            <!--VARA 6-->
                        </div>
                        <div class="vara">
                            <!--<br>-->
                            <?php
                            echo '<form method="POST" action="doUpdate.php">
                            <input type="text" name="content" value="'.$data["5"]["1"].'">
                            <input type="hidden" name="id" value="h1-6">
                            <input type="hidden" name="tabel" value="utbud">
                        </form>';
                            ?>
                            <br>
                           
                            <!--<h1>Horse</h1>--> 
                            <img src="Bilder/egna/DSC_0025.jpg" alt="häst">
                            <a class="btn_popUp" href="#pop_up_horse">More info</a>

                            <div class="pop_up">
                                <div id="pop_up_horse" class="animal">
                                    <img src="Bilder/egna/DSC_0031.jpg" alt="får">
                                    <h1>Horse</h1>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--            </div>-->
                    <br><br><br><br>
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

            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
            <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>

            <script src="JS/jquery.colorbox-min.js"></script>
            <script src="JS/bearHugColorbox.js"></script>
        </body>
    </html>

    <?php
}