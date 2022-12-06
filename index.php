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
        <hr>
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
        <h3>La fonction native php ucfirst():string</h3>
        <p>Retourne la chaîne string après avoir remplacé le premier caractère par sa majuscule.</p>
        <?php
            $string = "bonjour Amandine";
            echo ucfirst($string);
        ?>
        <hr>
        <h3>La fonction strtolower()</h3>
        <p>Cette fonction passe une chaîne de caractères en minuscules</p>
        <?php
            // utiliser & acute pour transformer le E en é
            $message = 'IL A NEIG&Eacute; DIMANCHE.';
            echo ucfirst(strtolower($message));
        ?>
        <hr>
        <h3>La fonction strtoupper()</h3>
        <p>Cette fonction passe une chaîne de caractères en majuscules</p>
        <?php
            // utiliser & acute pour transformer le E en é
            $message = 'il fait beau.';
            echo strtoupper($message);
        ?>
        <hr>
        <h3>La fonction mb_convert_case()</h3>
        <p>Cette fonction permet des manipulations comme ucfirst(), strtoupper() et strtolower() avec plus de fonctionnalités</p>
        <p>mb_convert_case(chaine, traitement, "encodage")</p>
        <ul>
            <li>chaine : la chaine de caractères à traiter</li>
            <li>traitement : une constante décrivant l'opération à effectuer (MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE). Le mode de traitment est en majuscules car il s'agit d'une constante, les bons usages en développement veulent que les constantes soient nommées en majuscules</li>
            <li>encodage : l'encodage des caractères à utiliser, majoritairement en UTF-8</li>
        </ul>
        <?php
            $chaine ="jean-pierre";
            // le TITLE met en majuscules la première lettre de chaque mot
            echo mb_convert_case($chaine, MB_CASE_TITLE, "UTF-8");
            echo "<br>";
            $chaine = "IL Y A DU VERGLAS";
            echo mb_convert_case($chaine, MB_CASE_LOWER, "UTF-8");
            echo "<br>";
            echo mb_convert_case($chaine, MB_CASE_UPPER, "UTF-8");
        ?>
        <hr>
        <h3>La fonction substr()</h3>
        <p></p>
        <hr>
        <h2>Exercices</h2>
        <hr>
        <h3>Exercice 1</h3>
        <p>Créer 3 variables lastName, firstName et age et les initialiser avec les valeurs de notre choix<br>
        - Attention age est de type entier.<br>
        - Afficher leur contenu.
        </p>
        <?php 
        $lastName = "Valtat";
        $firstName = "Amandine";
        $age = 39;
        echo "Je m'appelle $firstName $lastName et j'ai $age ans !";
        ?>
        <hr>
        <h3>Exercice 2</h3>
        <p>- Créer une variable km. <br>
        - L'initialiser à 1<br>
        - Afficher son contenu <br>
        - Changer sa valeur à 3<br>
        - Afficher son contenu <br>
        - Changer sa valeur à 125<br>
        - Afficher son contenu <br>
    </p>
    <?php 
        $km = 1;
        echo "$km km.<br>";
        $km = 3;
        echo "$km km.<br>";
        $km = 125;
        echo "$km km.<br>";
        ?>
        <hr>
        <h3>Exercice 3</h3>
        <p>- Créer une variable de stype string,<br>
        une de type int,<br>
        une de type float,<br>
        une de type boolean<br>
        - Les initialiser avec une valeur de votre choix<br>
        - Les afficher
        <hr>
    </main>
    <footer>

    </footer>
    <!-- js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>