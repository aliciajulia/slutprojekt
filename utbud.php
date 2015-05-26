<?php
include 'connectDb.php';

$sql = "SELECT * FROM `utbud`";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();
//var_dump($data);

$sql = "SELECT * FROM `info`";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$dataInfo = $stmt->fetchAll();
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
                <a href="index.php"> <img src="Bilder/egna/BHlogo_1.png" alt="logga"></a>
                <a href="login.php">Logga in</a>
            </div>

            <div id="nav">
                <ul>
                    <li ><a class="topLeft" href="index.php"><?php echo $dataInfo[1][1] ?></a></li>
                    <li><a href="om.php"><?php echo $dataInfo[2][1] ?></a></li>
                    <li><a href="foretagside.php"><?php echo $dataInfo[3][1] ?></a>
                        <ul>
                            <li><a href="aterforsaljare.php"><?php echo $dataInfo[4][1] ?></a></li>
                            <li><a class="active" href="utbud.php"><?php echo $dataInfo[5][1] ?></a></li>
                        </ul>
                    </li>
                    <li ><a class="topRight" href="kontakt.php"><?php echo $dataInfo[6][1] ?></a></li>
                </ul>
            </div>


            <div id="content">
                <div id="content_boxar">
                    <br><br><br>
                    <!--VARA 1-->
                    <div class="vara">
                        <h1><?php echo $data[0][1] ?></h1>
                        <img src="<?php echo $data[0][2] ?>" alt="hund">
                        <a class="btn_popUp" href="#pop_up_dog">More info</a>
                        <div class="pop_up">
                            <div id="pop_up_dog" class="animal">
                                <img src="<?php echo $data[0][2] ?>" alt="hund">
                                <h1><?php echo $data[0][1] ?></h1>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>

                            </div>
                        </div>
                    </div>
                    <!--VARA 2-->
                    <div class="vara">
                        <h1><?php echo $data[1][1] ?></h1>  
                        <img src="<?php echo $data[1][2] ?>" alt="delfin">
                        <a class="btn_popUp" href="#pop_up_dolphin">More info</a>

                        <div class="pop_up">
                            <div id="pop_up_dolphin" class="animal">
                                <img src="<?php echo $data[1][2] ?>" alt="delfin">
                                <h1><?php echo $data[1][1] ?></h1>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                            </div>
                        </div>
                        <!--VARA 3-->
                    </div>
                    <div class="vara"><h1><?php echo $data[2][1] ?></h1> 
                        <img src="<?php echo $data[2][2] ?>" alt="elefant">
                        <a class="btn_popUp" href="#pop_up_elephant">More info</a>

                        <div class="pop_up">
                            <div id="pop_up_elephant" class="animal">
                                <img src="<?php echo $data[2][2] ?>" alt="elefant">
                                <h1><?php echo $data[2][1] ?></h1>
                                <p> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                            </div>
                        </div>
                        <!--VARA 4-->
                    </div>
                    <div class="vara"><h1><?php echo $data[3][1] ?></h1> 
                        <img src="<?php echo $data[3][2] ?>" alt="får">
                        <a class="btn_popUp" href="#pop_up_sheep">More info</a>

                        <div class="pop_up">

                            <div id="pop_up_sheep" class="animal">
                                <img src="<?php echo $data[3][2] ?>" alt="får">
                                <h1><?php echo $data[3][1] ?></h1>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p> 
                            </div>
                        </div>
                        <!--VARA 5-->
                    </div>
                    <div class="vara"><h1><?php echo $data[4][1] ?></h1> 
                        <img src="<?php echo $data[4][2] ?>" alt="marsvin">
                        <a class="btn_popUp" href="#pop_up_guinea-pig"> More info</a>

                        <div class="pop_up">
                            <div id="pop_up_guinea-pig" class="animal">
                                <img src="<?php echo $data[4][2] ?>" alt="får">
                                <h1><?php echo $data[4][1] ?></h1>
                                <p> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                            </div>
                        </div>
                        <!--VARA 6-->
                    </div>
                    <div class="vara"><h1><?php echo $data[5][1] ?></h1> 
                        <img src="<?php echo $data[5][2] ?>" alt="häst">
                        <a class="btn_popUp" href="#pop_up_horse">More info</a>

                        <div class="pop_up">
                            <div id="pop_up_horse" class="animal">
                                <img src="<?php echo $data[5][2] ?>" alt="får">
                                <h1><?php echo $data[5][1] ?></h1>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some </p>
                            </div>
                        </div>
                    </div>
                </div>            
                <br><br><br><br>
            </div>
            <?php
            include 'footer.php';
            ?>

        </div>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>

        <script src="JS/jquery.colorbox-min.js"></script>
        <script src="JS/bearHugColorbox.js"></script>
    </body>
</html>
