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
                <h3>Les types de déclaration</h3>
                <p>En php ils sont déclarés comme ci-dessous</p>
                <?php
                    // tableau simple avec le mot array et des ()
                    $array1 = array(1, 2, 3, 4);
                    // tableau simple avec des []
                    $array2 =["Voiture", "Moto","Avion"];
                    // tableau associé
                    $array3 = [
                                "animal1" => "lapin",
                                "animal2" => "cheval",
                                "animal3" => "écureuil",
                                "animal4" => "hibou"
                    ];
                ?>
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
                </p>
                <?php
                    $str = "Coucou";
                    $nb = 3;
                    $pi = 3.141592653589793;
                    $bool = true;
                    echo 'Affichage de la variable $str de type string : '. $str . '<br>';
                    echo 'Affichage de la variable $nb de type int : '. $nb . '<br>';
                    echo 'Affichage de la variable $pi de type float : '. $pi . '<br>';
                    echo 'Affichage de la variable $bool de type boolean : ' . $bool . '<br>';
                ?>
        <hr>
                <h3>Exercice 4</h3>
                <p>Créer 3 variables lastName, firstName et age<br>
                - les initialiser avec les valeurs de notre choix<br>
                - Attention age est de type int<br>
                - Afficher "Bonjour " + lastName + firstName + ", tu as " + age + " ans.".
                </p>
                <?php 
                    $lastName = "Valtat";
                    $firstName = "Amandine";
                    $age = 39;
                    echo "Bonjour $lastName $firstName, tu as $age ans.";
                ?>
        <hr>
                <h3>Exercice 5</h3>
                <p>Créer 3 variables,<br>
                - dans la première mettre le résultat de l'opération 3 + 4<br>
                - dans la deuxième mettre le résultat de l'opération 5 * 20<br>
                - dans la troisième mettre le résultat de l'opération 45 / 5<br>
                Afficher le contenu des variables
                </p>
                <?php
                    $somme = 3 + 4;
                    $produit = 5 * 20;
                    $quotient = 45 / 5;
                    echo "Les résultats des opérations sont $somme, $produit et $quotient.";
                ?>
        <hr>
                <h3>Exercice 6</h3>
                <p>Créer une variable age et l'initialiser avec une valeur.<br>
                - Si l'âge est supérieur ou égal à 18, afficher "Vous êtes majeur."<br>
                - Sinon, afficher "Vous êtes mineur".</p>
                <?php
                    $age = 18;
                    if($age >= 18){
                        echo "Vous êtes majeur.";
                    }else{
                        echo "Vous êtes mineur.";
                    }
                ?>
        <hr>
                <h3>Exercice 7</h3>
                <p>Créer une variable isEasy de type boolean et l'initialiser avec une valeur.<br>
                - Afficher "C'est facile !", si c'est vrai.<br>
                - Sinon, afficher "C'est difficile !!".
                Bonus : l'écrire au moins de deux manières différentes</p>
                <?php
                    $isEasy = 1;
                    if($isEasy == true){
                        echo "<p>C'est facile !</p>";
                    }else{
                        echo "<p>C'est difficile !!</p>";
                    }
                    
                    if($isEasy == 1){
                        echo "<p>Summertime<br>
                        And the livin' is easy<br>
                        Fish are jumpin'<br>
                        And the cotton is high<br>
                        Oh, your daddy's rich<br>
                        And your ma is good-lookin'<br>
                        So hush, little baby<br>
                        Don't you cry</p>";
                    }else{
                        echo "<p>Vous n'aimez pas Gershwin ?</p>";
                    }
                    $isEasy = false;
                    switch($isEasy){
                        case true:
                            echo "C'est facile !";
                            break;
                            case false:
                                echo "C'est difficile !";
                                break;
                                default:
                                echo "Il s'est passé un truc pas normal là non ?";
                            }
                ?>
        <hr>
                <h3>Exercice 8</h3>
                <p>Créer deux variables age et gender<br>
                La variable gender peut prendre comme valeur :<br>
                - Homme<br>
                - Femme<br>
                - Non-binaire<br>
                En fonction de l'age et du genre afficher la phrase correspondante<br>
                "Vous êtes un homme/une femme/non-binaire et vous êtes majeur/mineur."<br>
                Gérer tous les cas.</p>
                <?php
                    $age = 18;
                    $gender = "femme";
                    if($age >= 18){
                        if($gender == "homme"){
                            echo "Vous êtes un homme et vous êtes majeur.<br>";
                        }else if($gender == "femme"){
                            echo "Vous êtes une femme et vous êtes majeure.<br>";
                        }else if($gender == "non-binaire"){
                            echo "Vous êtes non-binaire et vous êtes majeur.<br>";
                        }else{
                            echo "Vous êtes la Danse Hongroise de Brahms en fa majeur !<br>";
                        }
                    }else{
                        if($gender == "homme"){
                            echo "Vous êtes un homme et vous êtes mineur.<br>";
                        }else if($gender == "femme"){
                            echo "Vous êtes une femme et vous êtes mineure.<br>";
                        }else if($gender == "non-binaire"){
                            echo "Vous êtes non-binaire et vous êtes mineur.<br>";
                        }else{
                            echo "Vous êtes le Requiem de Mozart et vous êtes en ré mineur.<br>";
                        }
                    }
                    switch($gender){
                        case "homme":
                            if($age >= 18){
                                echo "Vous êtes un homme et vous êtes majeur.<br>";
                            }else{
                                echo "Vous êtes un homme et vous êtes mineur.<br>";
                            }
                            break;
                            case "femme":
                                if($age >= 18){
                                    echo "Vous êtes une femme et vous êtes majeure.<br>";
                                }else{
                                    echo "Vous êtes une femme et vous êtes mineure.<br>";
                                }
                                break;
                                default:
                                echo "Vous ne rentrez pas dans les cases :) <br>";
                            }                 
                            ?>
        <hr>
                <h3>Exercice 9</h3>
                <!-- à mettre en forme
-------------------------------------------------------------------------------------------------           
                <p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.  
Créer une variable **magnitude**. Selon la valeur de **magnitude**, afficher la phrase correspondante.  

Magnitude   |   Phrase
------      |    ---
1           |   Micro-séisme impossible à ressentir.
2           |   Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
3           |   Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
4           |   Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
5           |   Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
6           |   Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.  
7           |   Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
8           |   Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
9           |   Séisme capable de tout détruire sur une très vaste zone.  

Gérer tous les cas.  
*Utiliser autre chose que des if else*</p>
-------------------------------------------------------------------------------------------------->
                <?php
                    $magnitude = 0;
                    switch($magnitude):
                        case 1:
                            echo "<p>Micro-séisme impossible à ressentir.</p><br>";
                            break;
                        case 2:
                            echo "<p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p><br>";
                            break;
                        case 3:
                            echo "<p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p><br>";
                            break;
                        case 4:
                            echo "<p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p><br>";
                            break;
                        case 5:
                            echo "<p>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p><br>";
                            break;
                        case 6:
                            echo "<p>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p><br>";
                            break;
                        case 7:
                            echo "<p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p><br>";
                            break;
                        case 8:
                            echo "<p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p><br>";
                            break;
                        case 9:
                            echo "<p>Séisme capable de tout détruire sur une très vaste zone.</p><br>";
                            break;
                        default: 
                            echo "<p>Changez d'échelle, ou prenez un escabeau !</p><br>";
                        endswitch;
                ?>
        <hr>
                <h3>Exercice 10</h3>
                <p>Traduire ces codes avec des if else</p>
                <?php
                    $gender = "femme";
                    $age = 17;
                    $isOk = false;

                    echo ($gender != "homme") ? "C'est une développeuse.<br>" : "C'est un développeur.<br>";

                    if ($gender != "homme"){
                        echo "C'est une développeuse.<br>";
                    }else{
                        echo "C'est un développeur.<br>";
                    }

                    echo ($age >= 18) ? "Tu es majeur.<br>" : "Tu es mineur.<br>";

                    if ($age >= 18){
                        echo "Tu es majeur.<br>";
                    }else{
                        echo "Tu es mineur.<br>";
                    }

                    echo ($isOk == false) ? "C'est pas bon.<br>" : "C'est ok.<br>";
                    
                    if ($isOk == false){
                        echo "C'est pas bon.<br>";
                    }else{
                        echo "C'est ok.<br>";
                    }
                    
                    echo ($isOk) ? "C'est ok !!<br>" : "C'est pas bon !!<br>";
                    
                    if ($isOk){
                        echo "C'est ok !!<br>";
                    }else{
                        echo "C'est pas bon !!<br>";
                    }
                ?>
        <hr>
                <h3>Exercice 11</h3>
                <p></p>
                <?php

                ?>
        <hr>
                <h3>Exercice 12</h3>
                <p></p>
                <?php

                ?>
    </main>
    <footer>

    </footer>
    <!-- js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>