<?php
include 'connectDb.php';

session_start();
if ($_SESSION['inlog'] == 1) {
//    hämta hem texter från db för att kunna skriva ut dom i formulären
    $sql = "SELECT * FROM `kontakt`";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    $sql = "SELECT * FROM `info`";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dataInfo = $stmt->fetchAll();
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>BearHug - Kontakt</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="reset.css">
            <link rel="stylesheet" href="bearHug.css">

        </head>
        <body>
            <div id="wrapper">
                <div id="top">  
                    <a href="adminIndex.php"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>

                </div>

                <div id="nav">
                    <ul>
                        <li ><a class="topLeft" href="adminIndex.php"><?php echo $dataInfo[1][1] ?></a></li>
                        <li><a href="adminOm.php"><?php echo $dataInfo[2][1] ?></a></li>
                        <li><a href="adminForetagside.php"><?php echo $dataInfo[3][1] ?></a>
                            <ul>
                                <li><a href="adminAterforsaljare.php"><?php echo $dataInfo[4][1] ?></a></li>
                                <li><a href="adminUtbud.php"><?php echo $dataInfo[5][1] ?></a></li>
                            </ul>
                        </li>
                        <li ><a class="topRight active" href="adminKontakt.php"><?php echo $dataInfo[6][1] ?></a></li>
                    </ul>
                </div>

                <div id="content">
                    <?php
                    echo '<form method="POST" action="doUpdate.php">
                        <input type="text" name="content" value="' . $data["0"]["1"] . '">
                        <input type="hidden" name="id" value="h2">
                        <input type="hidden" name="tabel" value="kontakt">
                    </form>';
                    ?>
                    <?php
                    echo '<form method="POST" action="doUpdate.php">
                        <input type="text" style="width:600px; height:100px;" name="content" value="' . $data["1"]["1"] . '">
                        <input type="hidden" name="id" value="p-1">
                        <input type="hidden" name="tabel" value="kontakt">
                    </form>';
                    ?>
                    <br>
                    <br>
                    <br>

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
                        <br>
                        <button type="button" id="button2">Skicka</button>
                    </div>
                </div>
                <?php
                include 'adminFooter.php';
                ?>

            </div>
        </body>
    </html>

    <?php
}