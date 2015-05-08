<?php
include 'connectDb.php';

session_start();
//var_dump($_SESSION);
if ($_SESSION['inlog'] == 1) {
//var_dump($_SESSION);
//    hämta hem texter från db för att kunna skriva ut dom i formulären
    $sql = "SELECT * FROM `index`";
    $stmt = $dbh->prepare($sql);
//    $stmt->bindParam(":anvnam", $anvnam);
//    $stmt->bindParam(":losord", $losord);
    $stmt->execute();
    $data = $stmt->fetchAll();
//    var_dump($data);

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
                    <a href="adminIndex.php"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>
                </div>

                <div id="nav">
                    <ul>
                        <li ><a class="topLeft active" href="adminIndex.php"><?php echo $dataInfo[1][1] ?></a></li>
                        <li><a href="adminOm.php"><?php echo $dataInfo[2][1] ?></a></li>
                        <li><a href="adminForetagside.php"><?php echo $dataInfo[3][1] ?></a>
                            <ul>
                                <li><a href="adminAterforsaljare.php"><?php echo $dataInfo[4][1] ?></a></li>
                                <li><a href="adminUtbud.php"><?php echo $dataInfo[5][1] ?></a></li>
                            </ul>
                        </li>
                        <li ><a class="topRight" href="adminKontakt.php"><?php echo $dataInfo[6][1] ?></a></li>
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
                        <?php
                        echo '<form method="POST" action="doUpdate.php">
                        <input type="text" name="content" value="' . $data["0"]["content"] . '">
                        <input type="hidden" name="id" value="h1-1">
                        <input type="hidden" name="tabel" value="index">
                    </form>';

                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="' . $data["7"]["content"] . '">
                            <input type="hidden" name="id" value="p-1">
                            <input type="hidden" name="tabel" value="index">
                        </form>';
                        ?>
                        <!--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>-->
                        <button>Read More..
                        </button>

                    </div>
                    <div class="index_tre">
                        <?php
                        echo '<form method="POST" action="doUpdate.php">
                        <input type="text" name="content" value="' . $data["1"]["content"] . '">
                        <input type="hidden" name="id" value="h1-1">
                        <input type="hidden" name="tabel" value="index">
                    </form>';



                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="' . $data["8"]["content"] . '">
                            <input type="hidden" name="id" value="p-1">
                            <input type="hidden" name="tabel" value="index">
                        </form>';
                        ?>
                        <!--<h1>Our vison</h1>-->
                        <!--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>-->
                        <button>Read More..
                        </button>
                    </div>
                    <div class="index_tre">
                        <?php
                        echo '<form method="POST" action="doUpdate.php">
                        <input type="text" name="content" value="' . $data["2"]["content"] . '">
                        <input type="hidden" name="id" value="h1-1">
                        <input type="hidden" name="tabel" value="index">
                    </form>';



                        echo '<form method="POST" action="doUpdate.php">
                            <input type="text" style="width:300px; height:270px;" rows="17" cols="40" name="content" value="' . $data["9"]["content"] . '">
                            <input type="hidden" name="id" value="p-1">
                            <input type="hidden" name="tabel" value="index">
                        </form>';
                        ?>
                        <!--<h1>Get a cute teddy bear</h1>-->
                        <!--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>-->
                        <button>Read More..
                        </button>
                    </div>
                    <p> </p>
                </div>
                <?php
                include 'adminFooter.php';
                ?>

            </div>

            <script src="http://code.jquery.com/jquery-latest.min.js"></script>
            <script src="http://unslider.com/unslider.min.js"></script>

            <script src="JS/bearHugSlider.js"></script>
        </body>
    </html>

    <?php
}
