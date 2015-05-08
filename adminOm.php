<?php
include 'connectDb.php';
session_start();
if ($_SESSION['inlog'] == 1) {

    $sql = "SELECT * FROM `om`";
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
                    <a href="adminIndex.php"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>

                </div>

                <div id="nav">
                    <ul>
                        <li ><a class="topLeft" href="adminIndex.php"><?php echo $dataInfo[1][1] ?></a></li>
                        <li><a class="active" href="adminOm.php"><?php echo $dataInfo[2][1] ?></a></li>
                        <li><a href="adminForetagside.php"><?php echo $dataInfo[3][1] ?></a>
                            <ul>
                                <li><a href="aterforsaljare.html"><?php echo $dataInfo[4][1] ?></a></li>
                                <li><a href="adminUtbud.php"><?php echo $dataInfo[5][1] ?></a></li>
                            </ul>
                        </li>
                        <li ><a class="topRight" href="adminKontakt.php"><?php echo $dataInfo[6][1] ?></a></li>
                    </ul>
                </div>
                <div id="content">
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php
                    echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='" . $data[0][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h1'>
                        <input type='hidden' name='tabel' value='om'>
                            </form>";
                    ?>

                    <div class = "colums_om">
                        <!--<br>-->
                        <?php
                        echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='" . $data[1][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-1'>
                        <input type='hidden' name='tabel' value='om'>
                            </form>";

                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="' . $data[5][1] . '">
                            <input type="hidden" name="id" value="p-1">
                            <input type="hidden" name="tabel" value="om">
                        </form>';

//                        
                        ?>
                    </div>
                    <div class="colums_om">
                        <?php
                        echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='" . $data[2][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-2'>
                        <input type='hidden' name='tabel' value='om'>
                            </form>";

                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="' . $data[6][1] . '">
                            <input type="hidden" name="id" value="p-2">
                            <input type="hidden" name="tabel" value="om">
                        </form>';


                        ?>
                    </div>

                    <div class="colums_om">
                        <?php
                        echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='" . $data[3][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-3'>
                        <input type='hidden' name='tabel' value='om'>
                            </form>";
                        
                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="' . $data[7][1] . '">
                            <input type="hidden" name="id" value="p-3">
                            <input type="hidden" name="tabel" value="om">
                        </form>';

                        ?>
                    </div>

                    <div class="colums_om">
                        <?php
                        echo "<form method='POST' action='doUpdate.php'>
                            <input type='text' value='" . $data[4][1] . "' name='content'> 
                        <input type='hidden' name='id' value='h2-4'>
                        <input type='hidden' name='tabel' value='om'>
                            </form>";

                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="' . $data[8][1] . '">
                            <input type="hidden" name="id" value="p-4">
                            <input type="hidden" name="tabel" value="om">
                        </form>';

                        ?>
                    </div>
                    <p> </p>
                </div>
                <?php
                include 'adminFooter.php';
                ?>
            </div>
        </body>
    </html>
    <?php
}