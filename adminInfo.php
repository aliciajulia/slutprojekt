<?php
include 'connectDb.php';

session_start();
if ($_SESSION['inlog'] == 1) {

////    hämta hem texter från db för att kunna skriva ut dom i formulären
    $sql = "SELECT * FROM `info`";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    $sql = "SELECT * FROM `index`";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dataImg = $stmt->fetchAll();

    $sql = "SELECT `utbud`.*, `nalleklass`.*, `portotabell`.* FROM `utbud`, `nalleklass`, `portotabell`";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dataVisa = $stmt->fetchAll();
    var_dump($dataVisa);
    ?>
    <!--http://dbwebb.se/uppgift/kom-igang-med-sql kolla den länken-->

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
                        <li ><a class="topLeft" href="adminIndex.php"><?php echo $data[1][1] ?></a></li>
                        <li><a href="adminOm.php"><?php echo $data[2][1] ?></a></li>
                        <li><a href="adminForetagside.php"><?php echo $data[3][1] ?></a>
                            <ul>
                                <li><a href="adminAterforsaljare.php"><?php echo $data[4][1] ?></a></li>
                                <li><a href="adminUtbud.php"><?php echo $data[5][1] ?></a></li>
                            </ul>
                        </li>
                        <li ><a href="adminKontakt.php"><?php echo $data[6][1] ?></a></li>
                    </ul>
                </div>

                <div id="content">
                    <br>
                    <br>
                    <h2>Redigera menyalternativen</h2>

                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $data[1][1] ?> ' name='content'> 
                        <input type='hidden' name='id' value='meny1'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $data[2][1] ?>' name='content'> 
                        <input type='hidden' name='id' value='meny2'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $data["3"]["1"] ?> ' name='content'> 
                        <input type='hidden' name='id' value='meny3'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $data["4"]["1"] ?> ' name='content'> 
                        <input type='hidden' name='id' value='meny4'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $data["5"]["1"] ?> ' name='content'> 
                        <input type='hidden' name='id' value='meny5'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo$data["6"]["1"] ?> ' name='content'> 
                        <input type='hidden' name='id' value='meny6'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>


                    <br>
                    <br>
                    <h2>Redigera bilder i slidern</h2>
                    Bild 1
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $dataImg[3][1] ?> ' name='content'> 
                        <input type='hidden' name='id' value='meny1'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    Bild 2
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $dataImg[4][1] ?>' name='content'> 
                        <input type='hidden' name='id' value='meny2'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    Bild 3
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $dataImg["5"]["1"] ?> ' name='content'> 
                        <input type='hidden' name='id' value='meny3'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    Bild 4
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $dataImg["6"]["1"] ?> ' name='content'> 
                        <input type='hidden' name='id' value='meny4'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    <br>
                    <br>
                    <h2>Redigera loggan</h2>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='<?php echo $data[0][1] ?> ' name='content'> 
                        <input type='hidden' name='id' value='logo'>
                        <input type='hidden' name='tabel' value='info'>
                    </form>
                    <br>
                    <br>

                    <p>HEJ</p>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <?php
                include 'adminFooter.php';
                ?>
            </div>
        </body>
    </html>

    <?php
}