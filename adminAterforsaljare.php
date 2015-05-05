<?php
include 'connectDb.php';
session_start();
if ($_SESSION['inlog'] == 1) {
//var_dump($_SESSION);
//    hämta hem texter från db för att kunna skriva ut dom i formulären
    $sql = "SELECT * FROM `aterforsaljare`";
    $stmt = $dbh->prepare($sql);
//    $stmt->bindParam(":anvnam", $anvnam);
//    $stmt->bindParam(":losord", $losord);
    $stmt->execute();
    $data = $stmt->fetchAll();
//    var_dump($data);
//    var_dump($data[1][1]);
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
                    <a href="adminIndex.php"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>
                    <!--<a href="www.google.se">Logga in</a>-->
                    <!--                <div id="top_logga">
                    
                                    </div>
                                    <div id="top_lankar">
                                        <a href="www.google.se">Logga in</a> |
                                        <a href="www.google.se">Skapa konto</a>
                                    </div>-->

                </div>


                <div id="nav">
                    <ul>
                        <li ><a class="topLeft" href="adminIndex.php">Homepage</a></li>
                        <li><a  href="adminOm.php">About</a></li>
                        <li><a href="adminForetagside.php">Business Idea</a>
                            <ul>
                                <li><a class="active" href="adminAterforsaljare.php">Resellers</a></li>
                                <li><a href="adminUtbud.php">Product Range</a></li>
                            </ul>
                        </li>
                        <li ><a class="topRight" href="adminKontakt.php">Contact</a></li>
                    </ul>
                </div>

                <div id="content">

                    <br>
                    <br>
                    <br>
                    <br>
                    <h2>På förjande ställen finns våra varor att inhandla.</h2>
                    <div id="aterforsaljare1">
                        <div class="aterforsaljare"> 
                            <!--<a href="http://www.ahlens.se/">-->
                            <img src="Bilder/rsz_3ad7c2ebb96fcba7cda0cf54a2e802f5.gif" alt="återförsäljare" >
                            <!--<h2>Åhléns</h2></a>--> 
                            <?php
                            echo "<form method='POST' action='doUpdate.php'>
                            <input style='width:180px;' type='text' value='" . $data[0][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-1'>
                        <input type='hidden' name='tabel' value='aterforsaljare'>
                        <br>
                        <input style='width:180px;' type='text' value='" . $data[0][2] . "' name='link'>
                            </form>";
                            ?>
                        </div>
                        <div class="aterforsaljare">
                            <!--<a href="http://www.ikea.se/">-->
                            <img src="Bilder/rsz_ikea-logo.jpg" alt="återförsäljare">
                            <!--<h2>IKEA</h2></a>-->
                            <?php
                            echo "<form method='POST' action='doUpdate.php'>
                            <input style='width:180px;' type='text' value='" . $data[1][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-2'>
                        <input type='hidden' name='tabel' value='aterforsaljare'>
                        <br>
                        <input style='width:180px;' type='text' value='" . $data[1][2] . "' name='link'>
                            </form>";
                            ?>
                        </div>
                        <div class="aterforsaljare">
                            <!--<a href="http://www.ica.se/">-->
                            <img src="Bilder/rsz_logo_supermarket0512.gif" alt="återförsäljare">
                            <!--<h2>ICA</h2></a>-->
                            <?php
                            echo "<form method='POST' action='doUpdate.php'>
                            <input style='width:180px;' type='text' value='" . $data[2][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-3'>
                        <input type='hidden' name='tabel' value='aterforsaljare'>
                        <br>
                        <input style='width:180px;' type='text' value='" . $data[2][2] . "' name='link'>
                            </form>";
                            ?>
                        </div>
                        <div class="aterforsaljare">
                            <!--<a href="http://www.stadium.se/">-->
                            <img src="Bilder/rsz_stadium_logo.jpg" alt="återförsäljare">
                            <!--<h2>Stadium</h2></a>-->
                            <?php
                            echo "<form method='POST' action='doUpdate.php'>
                            <input style='width:180px;' type='text' value='" . $data[3][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-4'>
                        <input type='hidden' name='tabel' value='aterforsaljare'>
                        <br>
                        <input style='width:180px;' type='text' value='" . $data[3][2] . "' name='link'> 
                            </form>";
                            ?></div>
                        <!--                    <h2>IKEA</h2><h2>ICA Supermarket</h2><h2>Stadium</h2>-->
                    </div>
                    <div id="aterforsaljare2">
                        <div class="aterforsaljare">
                            <!--<a href="http://www.teamsportia.se/">-->
                            <img src="Bilder/rsz_teamsportia.png" alt="återförsäljare"> 
                            <!--<h2>Team Sportia</h2></a>-->
                            <?php
                            echo "<form method='POST' action='doUpdate.php'>
                            <input style='width:180px;' type='text' value='" . $data[4][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-5'>
                        <input type='hidden' name='tabel' value='aterforsaljare'>
                        <br>
                        <input style='width:180px;' type='text' value='" . $data[4][2] . "' name='link'>
                            </form>";
                            ?></div>
                        <div class="aterforsaljare">
                            <!--<a href="http://www.toysrus.se/">-->
                            <img src="Bilder/rsz_toys-r-us-logo.jpg" alt="återförsäljare">
                            <!--<h2>Toys R Us</h2></a>-->
                            <?php
                            echo "<form method='POST' action='doUpdate.php'>
                            <input style='width:180px;' type='text' value='" . $data[5][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-6'>
                        <input type='hidden' name='tabel' value='aterforsaljare'>
                        <br>
                        <input style='width:180px;' type='text' value='" . $data[5][2] . "' name='link'>
                            </form>";
                            ?></div>
                        <div class="aterforsaljare">
                            <!--<a href="http://www.hm.se/">-->
                            <img src="Bilder/rsz_hm_logga700.jpg" alt="återförsäljare">
                            <!--<h2>H&amp;M</h2></a>-->
                            <?php
                            echo "<form method='POST' action='doUpdate.php'>
                            <input style='width:180px;' type='text' value='" . $data[6][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-7'>
                        <input type='hidden' name='tabel' value='aterforsaljare'>
                        <br>
                        <input style='width:180px;' type='text' value='" . $data[6][2] . "' name='link'>
                            </form>";
                            ?></div>
                        <div class="aterforsaljare">
                            <!--<a href="http://www.br-leksaker.se/">-->
                            <img src="Bilder/rsz_0bd74be292ec564a8367341874d8a457.jpg" alt="återförsäljare">
                            <!--<h2>BR Leksaker</h2></a>-->
                            <?php
                            echo "<form method='POST' action='doUpdate.php'>
                            <input style='width:180px;' type='text' value='" . $data[7][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-8'>
                        <input type='hidden' name='tabel' value='aterforsaljare'>
                        <br>
                        <input style='width:180px;' type='text' value='" . $data[7][2] . "' name='link'>
                            </form>";
                            ?>
                        </div>
                        <!--                    <h2>Team Sportia</h2><h2>Toys R Us</h2><h2>H&M</h2><h2>BR Leksaker</h2>-->
                    </div>
                </div>

                <?php
                include 'footer.php';
                ?>
            </div>
        </body>
    </html>
    <?php
}
