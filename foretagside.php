<?php
include 'connectDb.php';

    $sql = "SELECT * FROM `info`";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dataInfo = $stmt->fetchAll();
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
                <a href="www.google.se">Logga in</a>
            </div>

            <div id="nav">
                <ul>
                    <li ><a class="topLeft" href="index.php"><?php echo $dataInfo[1][1] ?></a></li>
                    <li><a href="om.php"><?php echo $dataInfo[2][1] ?></a></li>
                    <li><a class="active" href="foretagside.php"><?php echo $dataInfo[3][1] ?></a>
                        <ul>
                            <li><a href="aterforsaljare.php"><?php echo $dataInfo[4][1] ?></a></li>
                            <li><a href="utbud.php"><?php echo $dataInfo[5][1] ?></a></li>
                        </ul>
                    </li>
                    <li ><a class="topRight" href="kontakt.php"><?php echo $dataInfo[6][1] ?></a></li>
                </ul>
            </div>
            <div id="content">
                <br>
                <br>
                <br>
                <br>

                <h1>Vårt samarbete med WSPA</h1>
                <p class="tva_columner">
                    But I must explains to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat
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
