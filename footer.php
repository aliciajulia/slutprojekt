<?php
$sql = "SELECT * FROM `footer`";
$stmt = $dbh->prepare($sql);
//    $stmt->bindParam(":anvnam", $anvnam);
//    $stmt->bindParam(":losord", $losord);
$stmt->execute();
$footerData = $stmt->fetchAll();
//    var_dump($data["0"]["content"]);
?>
<div id="footer">
    <?php
    echo '<form method="POST" action="doUpdate.php" style="width:500px; height:50px;">
                        <input type="text" style="width:500px; height:50px;" name="content" value="'.$footerData["0"]["1"].'">
                        <input type="hidden" name="id" value="p">
                        <input type="hidden" name="tabel" value="kontakt">
                    </form>';
    ?>
<!--    <p> Bearhug is not a real company. This page was made as a school project.
        Nothing displayed on this site is true. Hope you liked the website.
        All images on this page are taken and edited by Alicia Broberg. <br> Pictures are protected
        of the top Copyright Act.</p>-->
    <button><a href="adminInfo.php">Admin</a></button>
    <button><a href="doLogout.php">Logga ut</a></button>
    
    <div id="icons">
        <a href="http://www.google.se/"><img src="Bilder/1399910910_RSS.png" alt="icon"></a>
        <a href="http://www.facebook.se/"><img src="Bilder/1399910863_Facebook.png" alt="icon"></a>
        <a href="http://www.gmail.com/"><img src="Bilder/1399910919_Mail.png" alt="icon"></a>
    </div>
    <div id="logga">
        <img src="Bilder/egna/BHlogo_2.png" alt="logga">
    </div>
</div>