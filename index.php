<?php
include 'connectDb.php';

$sql = "SELECT * FROM `index`";
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
                <a href="index.php"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>
                <a href="login.php">Logga in</a>
            </div>

            <div id="nav">
                <ul>
                    <li ><a class="topLeft active" href="index.php"><?php echo $dataInfo[1][1] ?></a></li>
                    <li><a href="om.php"><?php echo $dataInfo[2][1] ?></a></li>
                    <li><a href="foretagside.php"><?php echo $dataInfo[3][1] ?></a>
                        <ul>
                            <li><a href="aterforsaljare.php"><?php echo $dataInfo[4][1] ?></a></li>
                            <li><a href="utbud.php"><?php echo $dataInfo[5][1] ?></a></li>
                        </ul>
                    </li>
                    <li ><a class="topRight" href="kontakt.php"><?php echo $dataInfo[6][1] ?></a></li>
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
                    <h1><?php echo $data[0][1] ?></h1>
                    <p><?php echo $data[7][1] ?></p>
                    <button>Read More..
                    </button>

                </div>
                <div class="index_tre">
                    <h1><?php echo $data[1][1] ?></h1>
                    <p><?php echo $data[8][1] ?></p>
                    <button>Read More..
                    </button>
                </div>
                <div class="index_tre">
                    <h1><?php echo $data[2][1] ?></h1>
                    <p><?php echo $data[9][1] ?></p>
                    <button>Read More..
                    </button>
                </div>
                <p> </p>
            </div>
            <?php
            include 'footer.php';
            ?>
        </div>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://unslider.com/unslider.min.js"></script>

        <script src="JS/bearHugSlider.js"></script>
    </body>
</html>
