<?php
include 'connectDb.php';

session_start();
if ($_SESSION['inlog'] == 1) {
////var_dump($_SESSION);
////    hämta hem texter från db för att kunna skriva ut dom i formulären
//    $sql = "SELECT * FROM `kontakt`";
//    $stmt = $dbh->prepare($sql);
////    $stmt->bindParam(":anvnam", $anvnam);
////    $stmt->bindParam(":losord", $losord);
//    $stmt->execute();
//    $data = $stmt->fetchAll();
////    var_dump($data);
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>BearHug - Admin</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="reset.css">
            <link rel="stylesheet" href="bearHug.css">

        </head>
        <body>
            <div id="wrapper">
                <div id="top">  
                    <a href="adminIndex.php"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>
<!--                    <a href="doLogout.php">Logga ut</a>-->

                </div>

                <div id="nav">
                    <ul>
                        <li ><a class="topLeft" href="adminIndex.php">Homepage</a></li>
                        <li><a href="adminOm.php">About</a></li>
                        <li><a href="adminForetagside.php">Business Idea</a>
                            <ul>
                                <li><a href="adminAterforsaljare.php">Resellers</a></li>
                                <li><a href="adminUtbud.php">Product Range</a></li>
                            </ul>
                        </li>
                        <li ><a href="adminKontakt.php">Contact</a></li>
                    </ul>
                </div>

                <div id="content">
                    <h2>Redigera menyalternativen</h2>
                    <?php
                    echo '<form method="POST" action="doUpdate.php">
                        <input type="text" name="content" value="' . $data["0"]["1"] . '">
                        <input type="hidden" name="id" value="h2">
                        <input type="hidden" name="tabel" value="kontakt">
                    </form>';
                    ?>
                    <!--<h2>Kontakt</h2>-->
                    <?php
                    echo '<form method="POST" action="doUpdate.php">
                        <input type="text" style="width:600px; height:100px;" name="content" value="' . $data["1"]["1"] . '">
                        <input type="hidden" name="id" value="p-1">
                        <input type="hidden" name="tabel" value="kontakt">
                    </form>';
                    ?>
                    <!--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truthBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth</p>-->
                    <br>
                    <br>
                    <br>
                    <!--kontakt ruta-->
                    <div id="kontakt">
                        <form action="contact.php" method="post">

                            <fieldset>
                                <legend></legend>
                                <p>
                                    <label for="uname">Namn:
                                        <strong class="required" title="Obligatorisk uppgift">*</strong>
                                    </label>

                                    <input type="text" name="uname" id="uname" required placeholder="Förnamn Efternamn" />
                                </p>

                                <p>
                                    <label for="umail">Mailadress:
                                        <strong class="required" title="Obligatorisk uppgift">*</strong>
                                    </label>
                                    <input type="email" name="umail" id="umail" required placeholder="namn.efternamn@mail.se" />
                                </p>
                                <p>
                                    <label for="uamne">Välj ämne
                                        <strong class="required" title="Obligatorisk uppgift"></strong>
                                    </label>  
                                    <select id="uamne" name="uamne">
                                        <option value="valj">Välj ämne..</option>
                                        <option value="aterforsaljare">Återförsäljare</option>
                                        <option value="utbud">Utbud</option>
                                        <option value="arbete">Vårt arbete</option>
                                        <option value="ovrigt">Övrigt</option>
                                    </select>     
                                </p> 
                            </fieldset>


                            <fieldset> 
                                <legend></legend>

                                <p>
                                    <label for="mmessage">Text:
                                        <strong class="required" title="Obligatorisk uppgift">*</strong>

                                    </label>

                                    <textarea id="mmessage" name="mmessage" required placeholder="Skriv ditt meddelande"></textarea>
                                </p>
                            </fieldset>
                        </form>

                        <br>
                        <?php
                        echo '<form method="POST" action="doUpdate.php">
                        <input type="text" name="content" value="' . $data["2"]["1"] . '">
                        <input type="hidden" name="id" value="p-2">
                        <input type="hidden" name="tabel" value="kontakt">
                    </form>';
                        ?>
                        <!--<p>Vi försöker svara på alla mail inom 2 arbetsdagar.</p>-->
                        <br>

                        <button type="button" id="button2">Skicka</button>

                    </div>
                    <!--slut kontaktruta-->


                </div>
                <?php
                include 'footer.php';
                ?>
                <!--                <div id="footer">
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

    <?php
}