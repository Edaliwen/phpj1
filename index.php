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
        <hr>
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
        <hr>
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
            <h2>Les opérateurs</h2>
        <hr>
            <?php
                // https://www.php.net/manual/en/language.operators.precedence.php
                // https://www.php.net/manual/en/language.operators.arithmetic.php
                // https://www.php.net/manual/en/language.operators.comparison.php
                // exemple : a + b
                $a = 5;
                $b = 6;
                $resultat = $a + $b;
                // le résultat est 11
                echo "Le résultat est $resultat.<br>";
                // la fonction var_dump() permet de récupérer la valeur d'une variable
                var_dump($resultat);
                ?>
        <hr>
            <h2>Les conditions</h2>
        <hr>
                <h3>Condition if</h3>
                <p>Vérifie les valeurs avec les opérateurs</p>
                <ul>
                    <li>> si la valeur est supérieure à une autre, ou >= pour supérieure ou égale</li>
                    <li>< si la valeur est inférieure à une autre, ou <= pour inférieure ou égale</li>
                    <li>== l'égalité de valeur non stricte (affranchie du typage)</li>
                    <li>=== l'égalité de valeur stricte (valeur et type, exemple : 1 n'est pas un "1")</li>
                    <li>!== et != l'inégalité de (stricte et non stricte)</li>
                    <li>&& les conditions à droite et à gauche du && doivent êtres remplies</li>
                    <li>|| au moins une des conditions à droite ou à gauche du || doit être remplie</li>
                </ul>
                <p>En php il y a deux façons d'écrire la condition if :<br>
                - if(conditions){ <br>
                    ~ <br>
                }<br>
                - if(conditions):<br>
                    ~ <br>
                    endif;
                </p>
                <?php
                    $score = 10;
                    if($score > 0 && $score < 20){
                        echo "<p>Les deux conditions sont remplies, le score est de $score.</p>";
                    }

                    $couleur = "bleu";
                    if($couleur == "rouge" || $couleur == "vert" || $couleur == "bleu"){
                        echo "<p>Une des conditions est remplie, la couleur est $couleur, on passe dans le if.</p>";
                    }

                    // autre exemple, ici avec c1 qui est un char et c2 qui est un int
                    $c1 = "1";
                    $c2 = 1;
                    if($c1 === $c2){
                        echo "<p>c1 et c2 sont strictement égaux.</p>";
                    }else{
                        echo "<p>c1 et c2 ne sont pas strictement égaux.</p>";
                    }
                ?>
        <hr>
                <h3>Conditions empty() et isset() (empty -> vide, isset -> défini)</h3>
                <p>Les conditions empty() et isset() permettent de vérifier si une variable existe (isset) et si elle contient une valeur ou non (empty).</p>
                <?php
                    if(isset($score2)){
                        if($score2 == 10){
                            echo "<p>Encore une vistoire de canard ! Avec un score de $score2 !</p>";
                        }else{
                            echo "<p>Et le score est de $score2</p>";
                        }
                    }
                    $score2;
                    if(empty($score2)){
                        echo '<p>On ne connaît pas le score pour le moment. (La variable $score2 est vide)</p>';
                    }else{
                        echo '<p>On a un résultat, le score est de '. $score2 . ' ! (La variable $score2 n\'est pas vide)</p>';
                    }
                    
                    ?>
        <hr>
                <h3>Condition switch</h3>
                <p>La condition switch agit comme une succession de if(){~}elseif(){~} dans laquelle on vérifie des égalités.</p>
                <?php
                    $couleur = "orange";
                    switch($couleur){
                        case "bleu":
                            echo "c'est bleu.";
                            break;
                        case "rose":
                            echo "C'est rose.";
                            break;
                        case "Papaye":
                            echo "La papaye n'est pas une couleur :s ";
                            break;
                        case "orange":
                            echo "La variable est une chaine de caractères de valeur orange.";
                            break;
                        default:
                            echo "C'est perdu.";
                    }
                ?>
        <hr>
                <h3>Expression ternaire du if else</h3>
                <p>Une expression ternaire est un raccourci pour exprimer une condition if else, elle utilise le ? et les : <br>
                </p>
                <?php
                $x = 2;
                echo ($x == 2) ? "x est égal à 2"  : "x est différent de 2";
                ?>
        <hr>
            <h2>Les tableaux</h2>
        <hr>
                <h3>Les types de déclaration</h3>
                <p>En php ils sont déclarés comme ci-dessous</p>
                    <h4>tableau simple avec le mot array et des ()</h4>
                    <?php
                        $array1 = array(1, 2, 3, 4);
                        echo "<h4>tableau simple avec des []</>";
                        $array2 =["Voiture", "Moto","Avion"];
                        echo "<h4>tableau associé</4>";
                        $array3 = [
                                    "animal1" => "lapin",
                                    "animal2" => "cheval",
                                    "animal3" => "écureuil",
                                    "animal4" => "hibou"
                        ];
                    ?>
                        <h4>tableau d'objets</h4>
                            <!-- à voir -->
                        <h4>Tableau multidirectionnel</h4> 
                            <p> Le tableau à deux dimensions est un tableau qui contient un ou plusieurs tableaux en valeur, le tableau à 3 dimensions est un tableau qui contient un ou plusieurs tableaux en valeur qui contiennent eux-mêmes d'autres tableuax en valeur, etc.<br>
                            Les sous-tableaux vont pouvoir être des tableaux numérotés ou des tableaux associatifs ou un mélange des deux
                            </p>
                    <?php
                        $array4 = [
                                    "livres" => [
                                        "poids" => 200,
                                        "quantité" => 10,
                                        "prix" => 15,
                                    ],
                                    "stickers" => [
                                        "poids" => 10,
                                        "quantité" => 100,
                                        "prix" => 1.5,
                                    ]

                                    ];
                        echo "<pre>";
                        var_dump($array4);
                        echo "</pre>";  
                        echo '<p>Affichage du poids des livres<br>
                        echo $array4["livres"]["poids"];</P>';
                        echo $array4["livres"]["poids"];        
                    ?>
        <hr>
                <h3>Accéder aux données</h3>
                <p>Tableau simple : $tableau[numéro de colonne(index, clé ou key)]</p>
                <?php
                   echo $array2[1]; // renvoie à la valeur "Moto"
                   echo "<br>";
                ?>

                <p>Tableau associatif $tableau["nom de l'index"]</p>
                <?php
                   echo $array3["animal4"]; // renvoie à la valeur "Moto"
                   echo "<br>";
                ?>

        <hr>
                <h3>Fonctions des tableaux</h3>
                    <h4>count()</h4>
                    <p>Renvoie la longueur, très utilisée dans les boucles</p>
                    <?php
                        echo 'La longueur du tableau $array2 ast de '. count($array2);
                        echo "<br>";
                        ?>
        <hr>
                    <h4>is_array()</h4>
                    <p>Vérifie si une variable est bien un tableau</p>
                    <?php
                        $toto ="coucou";
                        echo "<pre>";
                        var_dump(is_array($toto));
                        print_r($toto);
                        echo "<br>";
                        var_dump(is_array($array3));
                        print_r($array3);
                        echo "</pre>";
                        ?>
        <hr>
                    <h4>array_key_exists()</h4>
                    <p>Vérifie l'existence d'un nom de colonne dans un tableau associatif</p>
                    <?php
                        var_dump(array_key_exists("animal2", $array3)); // renvoie true
                        echo "<br>";
                        var_dump(array_key_exists("animal10", $array3));  // renvoie false
                        echo "<br>";
                    ?>
        <hr>
            <h2>Les boucles</h2>
        <hr>
            <p>Permettent de créer du code itératif</p>
        <hr>
                <h3>La boucle while</h3>
                <p>Cette boucle est la plus utilisée dans le cadre d'une requête mySQL pour récupérer des données (serveur) en php procédural uniquement.</p>
                <?php
                    $i = 0;
                    $tab = [
                        "lapin",
                        "cheval",
                        "souris",
                        "chien",
                        "ornithorynque"
                    ];
                    echo '<div class="row">';
                    while ($i < count($tab)){
                        echo '<div class ="col">' . $tab[$i] . '</div>';
                        $i ++;
                    }
                    echo '</div>';
                ?>
        <hr>
                <h3>La boucle for</h3>
                <p>Comme pour le js</p>
                <?php
                // la fonction sizeOf() est un alias de count()
                    for($i = 0; $i < sizeOf($tab); $i++){
                        echo "<p>Pour i = $i, valeur = $tab[$i].</p>";
                    }
                ?>
        <hr>
                <h3>La boucle foreach</h3>
                <p>Très utilisée avec le PHP Orienté Objet, les tableaux associatifs et les tableaux d'objets</p>
                <?php
                    $tab1 = [
                        "zéro" => "serpent",
                        "1" => "araignée",
                        "2" => "éléphant"
                    ];
                    // on passe en revue les éléments du tableau à travers la variable auto-déclarée $item
                    foreach($tab1 as $item){
                        echo '<p>L\'item a la valeur ' . $item . '.</p>';
                    }
                ?>
        <hr>
            <h2>Diviser son code dans différents fichiers php</h2>
        <hr>
                <h3>Fonctions include(), require() et require_once()</h3>
                <p>Ces fonctions vont permettre de rapatrier le code d'un fichier php dans un autre fichier php (principal)</p>
                <p>La fonction require() est identique à include() sauf qu'elle gère les erreurs différement</p>
                <p>Si une erreur se produit, la fonction include() génère un avertissement, mais le script continuera son exécution</p>
                <p>Le require() génère une erreur fatale et le script s'arrête.</p>
                <p>Le require_once() rapatrie une seule fois le fichier dans le script.</p>
        <hr>
            <h2>Définir une constante</h2>
        <hr>
        <hr>
            <h2>Les variables superGlobales natives PHP</h2>
        <hr>
    </main>
    <footer>

    </footer>
    <!-- js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>