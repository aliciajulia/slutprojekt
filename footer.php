<?php
$sql = "SELECT * FROM `footer`";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$footerData = $stmt->fetchAll();
?>
            <div id="footer">

                <p> <?php echo $footerData[0][1]  ?></p>
                <div id="icons">
                    <a href="http://www.google.se/"><img src="Bilder/1399910910_RSS.png" alt="icon"></a>
                    <a href="http://www.facebook.se/"><img src="Bilder/1399910863_Facebook.png" alt="icon"></a>
                    <a href="http://www.gmail.com/"><img src="Bilder/1399910919_Mail.png" alt="icon"></a>
                </div>
                <div id="logga">
                    <img src="Bilder/egna/BHlogo_2.png" alt="logga">
                </div>
            </div>
