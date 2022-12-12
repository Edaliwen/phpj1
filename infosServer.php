<?php
    include("assets/inc/headFront.php");
?>
<title>Infos serveur</title>
<?php
    include("assets/inc/headerFront.php");
?>
<main class="container">
<p class="mt-3"><?="User agent : " . $_SERVER["HTTP_USER_AGENT"] . "<br> Adresse ip : " . $_SERVER["REMOTE_ADDR"] . "<br> Nom du serveur : " . $_SERVER["SERVER_NAME"]?></p> 
</main>
<?php
    include("assets/inc/footerFront.php");
?>