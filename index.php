<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- notre css -->
    <link rel="stylesheet" href="assets/css/styleFront.css">
    <title>PHP jour 1</title>
</head>
<body>
    <header class="container-fluid bg-info text-light py-2">
        PHP : Premiers pas...
    </header>
    <main class="container">
        <h1>Php</h1>
        <h2>Les bases</h2>
        <h3>La commande echo</h3>
        <p>La commande echo permet d'écrire du contenu dans la source html qui sera renvoyé au client</p>
        <!--pour ouvrir une zone de php dans le code on utilise <?php ?> ne pas oublier le ; à la fin -->
        <?php
            echo "Bonjour en PHP";
            echo "<p>Bonjour avec la balise p</p>";
        ?>
        <hr>
        <h3>Les variables</h3>
        <p>Les variables en php sont toujours nommées avec un $. Il n'y a pas comme le js d'instanciation de variable avec un mot réservé comme let ou const.</p>
        <?php 
            // déclaration de la variable
            $message = "Bonjour chez vous !<br>";
            $score = 12;
            // affichage des variables dans l'html
            echo $message;
            echo $score;
        ?>
        <hr>
        <h3>La concaténation</h3>
        <p>Php n'est pas un langage ECMAScript, la concaténation ne se fait donc pas avec un + mais avec un .</p>
        <?php
            $prenom = "Amandine";
            echo "Bonjour " . $prenom . "<br>";
            // autre façon sans concaténation (interpolation)
            echo "Bonjour $prenom<br>";
            // avec des ' ' $prenom va être considéré comme du texte
            echo 'Bonjour $prenom <br>';
        ?>
        <hr>
        <h2>Manipulation de chaînes de caractères</h2>
    </main>
    <footer>

    </footer>
    <!-- js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>