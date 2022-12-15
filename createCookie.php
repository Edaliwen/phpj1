<?php
    include("assets/inc/headFront.php");
?>
<title>Infos de session</title>
<?php
    include("assets/inc/headerFront.php");
?>
<main class="container">
<?php
if(isset($_POST["login"])){
    setcookie("mdp");
    setcookie("login");
    $_COOKIE["PHPSESSID"]["login"]= $_POST["login"];
    $_COOKIE["PHPSESSID"]["mdp"] = $_POST["mdp"];
}
echo 'Bonjour ' . $_COOKIE["login"] . ' . Votre mot de passe est le suivant :' . $_COOKIE["mdp"];
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
?>
</main>
<?php
    include("assets/inc/footerFront.php");
?>
