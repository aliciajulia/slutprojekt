<?php
include 'connectDb.php';


session_start();
if ($_SESSION['inlog'] == 1) {
    
//    hämta hem texter från db för att kunna skriva ut dom i formulären
    $sql = "SELECT * FROM `foretagside`";
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
        <title>BearHug - Företagsidé</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="bearHug.css">
        <script src="bearHug.js"></script>
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
                    <li><a class="active" href="adminForetagside.php">Business Idea</a>
                        <ul>
                            <li><a href="adminAterforsaljare.php">Resellers</a></li>
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

                 <?php
                        echo '<form method="POST" action="doUpdate.php">
                        <input type="text" name="content" value="'.$data["0"]["1"].'">
                        <input type="hidden" name="id" value="h1">
                        <input type="hidden" name="tabel" value="foretagside">
                    </form>';
                        ?>
                <!--<h1>Vårt samarbete med WSPA</h1>-->
                <p class="tva_columner">
                    <?php
                    echo '<form method="POST" action="doUpdate.php">
                        <input type="text" style="width:900px; height:270px;" name="content" value="'.$data["1"]["1"].'">
                        <input type="hidden" name="id" value="p">
                        <input type="hidden" name="tabel" value="foretagside">
                    </form>';
                    ?>
                    <!--But I must explains to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?-->
                    <!--At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat-->
                </p>

                <img id="loggaWSPA" src="Bilder/rsz_1logo_wspa_oranje.jpg" alt="wspa">
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
    </body>
</html>

<?php
}
