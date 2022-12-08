<?php
    // on appelle le head
    include("assets/inc/headFront.php");
?>
    <!-- on garde le titre de la page -->
    <title>PHP jour 1</title>

<?php
    // on appelle le header
    include("assets/inc/headerFront.php");
?>
    <!-- on garde la structure donc on garde le main -->
    <main class="container">
        <?php
            // on appelle le fichier cours.php
            include("cours.php");
        ?>
<hr>
<hr>
        <?php
            // on appelle le fichier exercices.php
            include("exercices.php");
        ?>
    </main>
<?php
    include("assets/inc/footerFront.php");
?>