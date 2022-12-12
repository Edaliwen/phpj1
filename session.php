<?php
    include("assets/inc/headFront.php");
?>
<title>Infos de session</title>
<?php
    include("assets/inc/headerFront.php");
?>
<main class="container">
<p class="mt-3"><?="Votre nom : " . $_SESSION["lastname"] . "<br> Votre prénom : " . $_SESSION["firstname"] . "<br> Votre âge : " . $_SESSION["age"]?></p> 
</main>
<?php
    include("assets/inc/footerFront.php");
?>