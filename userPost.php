<?php
    include("assets/inc/headFront.php");
?>
<title>Page user : méthode post</title>
<?php
    include("assets/inc/headerFront.php");
?>
<main class="container">
    <div class="row">
        <div class="col-4">
           <h3 class="mt-3">Bonjour  <?= $_POST["prenom"] . " " . $_POST["nom"] ?> ! <br>
           Connexion réussie :)</h3> 
        </div>
    </div>
    <?php
        echo '<pre>';
        var_dump($_GET, $_POST);
        echo '</pre>';
    ?>
</main>
<?php
    include("assets/inc/footerFront.php");
?>