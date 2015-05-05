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
<?php // " . $data[0][1] . "?>
                <div id="content">
                    <h2>Redigera menyalternativen</h2>

                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='meny1' name='content'> 
                        <input type='hidden' name='id' value='meny1'>
                        <input type='hidden' name='tabel' value='admin'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='meny2' name='content'> 
                        <input type='hidden' name='id' value='meny2'>
                        <input type='hidden' name='tabel' value='admin'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='meny3' name='content'> 
                        <input type='hidden' name='id' value='meny3'>
                        <input type='hidden' name='tabel' value='admin'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='meny4' name='content'> 
                        <input type='hidden' name='id' value='meny4'>
                        <input type='hidden' name='tabel' value='admin'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='meny5' name='content'> 
                        <input type='hidden' name='id' value='meny5'>
                        <input type='hidden' name='tabel' value='admin'>
                    </form>
                    <form method='POST' action='doUpdate.php'>
                        <input style='width:180px;' type='text' value='meny6' name='content'> 
                        <input type='hidden' name='id' value='meny6'>
                        <input type='hidden' name='tabel' value='admin'>
                    </form>
                    

                </div>
                <?php
                include 'footer.php';
                ?>
            </div>
        </body>
    </html>

    <?php
}