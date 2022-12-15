<?php
    include("assets/inc/headFront.php");
?>
<title>Formulaire méthode GET</title>
<?php
    include("assets/inc/headerFront.php");
?>
<main>
    <div class="container">
        <form action="createCookie.php" method="post">
            <div class="row col-12 mt-2">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control" id="login">
            </div>
            <div class="row col-12 mt-2">
                <label for="mdp">Mot de passe</label>
                <input type="text" name="mdp" type="password" class="form-control" id="mdp">
            </div>
            <div class="row col-12 mt-2">
                <button type="submit" class="btn btn-outline-primary">Log</button>
            </div>
        </form>
    </div>
<?php
    include("assets/inc/footerFront.php");
?>