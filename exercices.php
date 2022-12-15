<h1>Exercices</h1>
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
    echo 'Affichage de la variable $str de type string : ' . $str . '<br>';
    echo 'Affichage de la variable $nb de type int : ' . $nb . '<br>';
    echo 'Affichage de la variable $pi de type float : ' . $pi . '<br>';
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
    if ($age >= 18) {
        echo "Vous êtes majeur.";
    } else {
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
    if ($isEasy == true) {
        echo "<p>C'est facile !</p>";
    } else {
        echo "<p>C'est difficile !!</p>";
    }

    if ($isEasy == 1) {
        echo "<p>Summertime<br>
            And the livin' is easy<br>
            Fish are jumpin'<br>
            And the cotton is high<br>
            Oh, your daddy's rich<br>
            And your ma is good-lookin'<br>
            So hush, little baby<br>
            Don't you cry</p>";
    } else {
        echo "<p>Vous n'aimez pas Gershwin ?</p>";
    }
    $isEasy = false;
    switch ($isEasy) {
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
    if ($age >= 18) {
        if ($gender == "homme") {
            echo "Vous êtes un homme et vous êtes majeur.<br>";
        } else if ($gender == "femme") {
            echo "Vous êtes une femme et vous êtes majeure.<br>";
        } else if ($gender == "non-binaire") {
            echo "Vous êtes non-binaire et vous êtes majeur.<br>";
        } else {
            echo "Vous êtes la Danse Hongroise de Brahms en fa majeur !<br>";
        }
    } else {
        if ($gender == "homme") {
            echo "Vous êtes un homme et vous êtes mineur.<br>";
        } else if ($gender == "femme") {
            echo "Vous êtes une femme et vous êtes mineure.<br>";
        } else if ($gender == "non-binaire") {
            echo "Vous êtes non-binaire et vous êtes mineur.<br>";
        } else {
            echo "Vous êtes le Requiem de Mozart et vous êtes en ré mineur.<br>";
        }
    }
    switch ($gender) {
        case "homme":
            if ($age >= 18) {
                echo "Vous êtes un homme et vous êtes majeur.<br>";
            } else {
                echo "Vous êtes un homme et vous êtes mineur.<br>";
            }
            break;
        case "femme":
            if ($age >= 18) {
                echo "Vous êtes une femme et vous êtes majeure.<br>";
            } else {
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
    switch ($magnitude):
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

    if ($gender != "homme") {
        echo "C'est une développeuse.<br>";
    } else {
        echo "C'est un développeur.<br>";
    }

    echo ($age >= 18) ? "Tu es majeur.<br>" : "Tu es mineur.<br>";

    if ($age >= 18) {
        echo "Tu es majeur.<br>";
    } else {
        echo "Tu es mineur.<br>";
    }

    echo ($isOk == false) ? "C'est pas bon.<br>" : "C'est ok.<br>";

    if ($isOk == false) {
        echo "C'est pas bon.<br>";
    } else {
        echo "C'est ok.<br>";
    }

    echo ($isOk) ? "C'est ok !!<br>" : "C'est pas bon !!<br>";

    if ($isOk) {
        echo "C'est ok !!<br>";
    } else {
        echo "C'est pas bon !!<br>";
    }
    ?>
<hr>
<h3>Exercice 11</h3>
<p>Créer un tableau simple months et l'initialiser avec les valeurs suivantes:<br> de janvier à décembre.</p>
<?php
    $months = [
        "janvier",
        "février",
        "mars",
        "avril",
        "mai",
        "juin",
        "juillet",
        "aout",
        "septembre",
        "octobre",
        "novembre",
        "décembre"
    ];
    echo "<pre>";
    print_r($months);
    echo "</pre>";
    ?>
<hr>
<h3>Exercice 12</h3>
<p>Avec le tableau de l'exercice 11, afficher la valeur de la 3e ligne du tableau. </p>
<?php
    echo $months[2];
    ?>
<hr>
<h3>Exercice 13</h3>
<p>Afficher la valeur de l'index 5. </p>
<?php
    echo $months[5];
    ?>
<hr>
<h3>Exercice 14</h3>
<p>Mettre l'accent sur le u de août.</p>
<?php
    $months[7] = "août";
    echo $months[7];
    ?>
<hr>
<h3>Exercice 15</h3>
<p>Créer un tableau associatif avec comme index le numéro du département des Hauts-de-France et en valeur leur nom.</p>
<?php
    $hautsDeFrance = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme"
    ];
    echo "<pre>";
    print_r($hautsDeFrance);
    echo "</pre>";
    ?>
<hr>
<h3>Exercice 16</h3>
<p>Afficher la valeur de l'index 59</p>
<?php
    $hautsDeFrance = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme"
    ];
    echo $hautsDeFrance["59"];
    ?>
<hr>
<h3>Exercice 17</h3>
<p>Ajouter la ligne correspondant au département de la ville de Reims</p>
<?php
    $hautsDeFrance += [
        "51" => "Marne"
    ];
    echo "<pre>";
    print_r($hautsDeFrance);
    echo "</pre>";
    ?>
<hr>
<h3>Exercice 18</h3>
<p>Afficher les valeurs du tableau $months avec une boucle.</p>
<?php
    echo '<div class="row">';
    for ($i = 0; $i < count($months); $i++) {
        echo '<div class="col">' . $months[$i] . '</div>';
    }
    echo '</div>';

    ?>
<hr>
<h3>Exercice 19</h3>
<p>Afficher les valeurs du tableau $hautsDeFrance avec une boucle.</p>
<?php

    foreach ($hautsDeFrance as $item) {
        echo '<p>' . $item . '</p>';
    }
    ?>
<hr>
<h3>Exercice 20</h3>
<p>Afficher les valeurs du tableau $hautsDeFrance ainsi que les clés associées.</p>
<?php
    foreach ($hautsDeFrance as $key => $value) {
        echo '<p>Le département ' . $value . ' a le numéro ' . $key . '.</p>';
    }
    ?>
<hr>
<h3>Exercice 21</h3>
<p>Créer une variable et l'initialiser à 0.<br>
    L'afficher et l'incrémenter jusqu'à atteindre 10. </p>
<?php
    $i = 0;
    while ($i <= 10) {
        echo $i . '<br>';
        $i++;
    }
    ?>
<hr>
<h3>Exercice 22</h3>
<p>Créer deux variables<br>
    Initialiser la première à 0 et la deuxième avec un nombre compris entre 1 et 100.<br>
    Tant que la première variable n'est pas supérieure à 20,<br>
    multiplier la première variable avec la deuxième,<br>
    afficher le résultat,<br>
    incrémenter la première variable jusqu'à atteindre 20.</p>
<?php
    $i = 0;
    $nb = 3;
    $produit;
    while ($i <= 20) {
        $produit = $i * $nb;
        echo "$i * $nb = $produit<br>";
        $i += 3;
    }
    ?>
<hr>
<h3>Exercice 23</h3>
<p>Créer deux variables<br>
    Initialiser la première à 100 et la deuxième avec un nombre compris entre 1 et 100.<br>
    Tant que la première variable n'est pas inférieure ou égale à 10,<br>
    multiplier la première variable avec la deuxième,<br>
    afficher le résultat,
    décrémenter la première variable.</p>
<?php
    $i = 100;
    $nb = 3;
    $produit;
    while ($i >= 10) {
        $produit = $i * $nb;
        echo "$i * $nb = $produit<br>";
        $i -= 3;
    }
    ?>
<hr>
<h3>Exercice 24</h3>
<p>Créer une variable et l'initialiser à 1.<br>
    Tant que cette variable n'atteint pas 10,<br>
    l'afficher et l'incrémenter de la moitié de sa valeur. </p>
<?php
    $i = 1;
    while ($i < 10) {
        echo $i . '<br>';
        $i = $i + $i / 2;
    }
    ?>
<hr>
<h3>Exercice 25</h3>
<p>En allant de 1 à 15 avec un pas de 1, afficher le message "On y arrive presque"</p>
<?php
    $i = 1;
    while ($i <= 15) {
        echo "$i On y arrive presque<br>";
        $i++;
    }
    ?>
<hr>
<h3>Exercice 26</h3>
<p>En allant de 20 à 0 avec un pas de 1, afficher le message "C'est presque bon"</p>
<?php
    $i = 20;
    while ($i >= 0) {
        echo "$i C'est presque bon<br>";
        $i--;
    }
    ?>
<hr>
<h3>Exercice 27</h3>
<p>En allant de 1 à 100 avec un pas de 15, afficher le message "On tient le bon bout".</p>
<?php
    $i = 1;
    while ($i <= 100) {
        echo "$i On tient le bon bout<br>";
        $i += 15;
    }

    for ($i = 1; $i <= 100; $i += 15) {
        echo "$i On tient le bon bout<br>";
    }
    ?>
<hr>
<h3>Exercice 28</h3>
<p>En allant de 200 à 0 avec un pas de 15, afficher le message "Enfin !!!!".</p>
<?php
    $i = 200;
    while ($i >= 0) {
        echo "$i Enfin !!!!<br>";
        $i -= 15;
    }
    ?>
<hr>
<h3>Exercice 29</h3>
<p>Faire une fonction qui retourne true et affiche le résultat</p>
<?php
    echo retourTrue();

    function retourTrue(): bool
    {
        $trueOrFalse = true;
        return $trueOrFalse;
    }
    ?>
<hr>
<h3>Exercice 30</h3>
<p>Faire une fonction qui prend en paramètre une chaine de caractères et un nombre et qui renvoie la concaténation des
    deux résultats.</p>
<?php
    echo faimAQuelPoint("affamée", 157);

    function faimAQuelPoint(string $degreDeFaim, int $quantiteDeNourritureRequise)
    {
        return "Je suis $degreDeFaim, je mangerais bien $quantiteDeNourritureRequise pizzas !<br>";
    }
    ?>
<hr>
<h3>Exercice 31</h3>
<p>Faire une fonction qui prend en paramètre deux nombres. <br>
    La fonction doit retourner : <br>
    - "le premier nombre est plus grand" si le premier nombre est plus grand que le deuxième <br>
    - "le premier nombre est plus petit" si le premier nombre est plus petit que le deuxième <br>
    - "les deux nombres sont identiques" si les deux nombres sont égaux</p>
<?php
    comparerDeuxNombres(2, 157);

    function comparerDeuxNombres(int $a, int $b)
    {
        if ($a > $b) {
            echo "Le premier nombre est plus grand.<br>";
        } else if ($a < $b) {
            echo "Le premier nombre est plus petit.<br>";
        } else {
            echo "Les deux nombres sont identiques.<br>";
        }
    }
    ?>
<hr>
<h3>Exercice 32</h3>
<p>Faire une fonction qui prend trois paramètres: <br>
    le nom, la fonction et l'âge.<br>
    Elle doit renvoyer <br>
    "Bonjour + prénom + nom + tu as + âge."</p>
<?php
    identification("Amandine", "Valtat", 39);

    function identification(string $firstName, string $lastName, int $age)
    {
        echo "Bonjour $firstName $lastName tu as $age ans.<br>";
    }
    ?>
<hr>
<h3>Exercice 33</h3>
<p>Faire une fonction qui prend deux paramètres :<br>
    **l'âge et le genre d'une personne**. <br>
    Le genre peut être :<br>
    - Homme<br>
    - Femme<br>
    La fonction doit renvoyer en fonction des paramètres :<br>
    - **Vous êtes un homme et vous êtes majeur**<br>
    - **Vous êtes un homme et vous êtes mineur**<br>
    - **Vous êtes une femme et vous êtes majeur**<br>
    - **Vous êtes une femme et vous êtes mineur**<br>
    Gérer tous les cas.</p>
<?php
    unPeuBinaireToutCa("homme", 39);

    function unPeuBinaireToutCa(string $gender, int $age)
    {
        if ($age >= 18) {
            if ($gender == "homme") {
                echo "Vous êtes un homme et vous êtes majeur.<br>";
            } else {
                echo "Vous êtes une femme et vous êtes majeure.<br>";
            }
        } else {
            if ($gender == "femme") {
                echo "Vous êtes une femme et vous êtes mineure.<br>";
            } else {
                echo "Vous êtes un homme et vous êtes mineur.<br>";
            }
        }
    }
    echo unPeuBinaire("homme", 15);

    function unPeuBinaire(string $gender, int $age)
    {
        if ($gender == "homme") {
            $votreGenre = "un homme";
            if ($age >= 18) {
                $votreAge = "majeur";
            } else {
                $votreAge = "mineur";
            }
        } else {
            $votreGenre = "une femme";
            if ($age >= 18) {
                $votreAge = "majeure";
            } else {
                $votreAge = "mineure";
            }
        }
        return "Vous êtes $votreGenre et vous êtes $votreAge.";
    }
    ?>
<hr>
<h3>Exercice 34</h3>
<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.<br>
    Tous les paramètres doivent avoir une valeur par défaut.</p>
<?php
    echo additionnerTroisNombres(98, 2, 47);

    function additionnerTroisNombres($a = 1, $b = 2, $c = 3): int
    {
        return $a + $b + $c;
    }
    ?>
<hr>
<h3>Exercice 35</h3>
<p>Tester sur la page que tous les paramètres de l'URL existent et les afficher:<br>
    "index.php?lastname=Nemare&firstname=Jean"</p>
<?php
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';
    if ($_SERVER["QUERY_STRING"] == "lastname=Nemare&firstname=Jean") {
        echo "index.php?" . $_SERVER["QUERY_STRING"];
    }
    ?>
<hr>
<h3>Exercice 36</h3>
<p>Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler.</p>
<?php
    if (isset($_GET["age"])) {
        echo "La clé age existe, sa valeur est " . htmlspecialchars($_GET["age"]);
    } else {
        echo "La clé n'existe pas";
    }

    ?>

<hr>
<h3>Exercice 37</h3>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br>
    index.php?startDate=2/05/2016&endDate=27/11/2016
</p>
<?php
    if (isset($_GET["startDate"]) && isset($_GET["endDate"])) {
        echo "Les clés startDate et endDate existent, la valeur de startDate est " . htmlspecialchars($_GET["startDate"]) . " et la valeur de endDate est " . htmlspecialchars($_GET["endDate"]);
    } else {
        echo "Ces clés n'existent pas";
    }
    ?>
<hr>
<h3>Exercice 38</h3>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br>
    index.php?language=PHP&server=LAMP</p>
<?php
    if (isset($_GET["language"]) && isset($_GET["server"])) {
        echo "Les clés language et server existent, la valeur de language est " . htmlspecialchars($_GET["language"]) . " et la valeur de server est " . htmlspecialchars($_GET["server"]);
    } else {
        echo "Ces clés n'existent pas";
    }
    ?>
<hr>
<h3>Exercice 39</h3>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br>
    index.php?week=12</p>
<?php
    if (isset($_GET["week"])) {
        echo "La clé week existe, sa valeur est " . htmlspecialchars($_GET["week"]);
    } else {
        echo "Cette clé n'existe pas";
    }
    ?>
<hr>
<h3>Exercice 40</h3>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br>
    index.php?building=12&room=101</p>
<?php
    if (isset($_GET["building"]) && isset($_GET["room"])) {
        echo "Les clés building et room existent, la valeur de building est " . htmlspecialchars($_GET["building"]) . " et la valeur de room est " . htmlspecialchars($_GET["room"]);
    } else {
        echo "Ces clés n'existent pas";
    }
    ?>
<hr>
<h3>Exercice 41</h3>
<p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode
    GET.<br>
    Afficher dans la page user.php les données du formulaire transmis.</p>

<a class="btn btn-outline-primary" href="./formulaireGet.php" role="button">Accéder au formulaire</a>

<hr>
<h3>Exercice 42</h3>
<p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode
    POST.
</p>
Afficher dans la page user.php les données du formulaire transmises.<br>
<a class="btn btn-outline-primary" href="./formulairePost.php" role="button">Accéder au formulaire</a>

<hr>
<h3>Exercice 43</h3>
<p>Créer un formulaire sur la page index.php avec :<br>
    - Une liste déroulante pour la civilité (Mr ou Mme)<br>
    - Un champ texte pour le nom<br>
    - Un champ texte pour le prénom <br><br>
    Ce formulaire doit rediriger vers la page index.php. <br>
    Vous avez le choix de la méthode.</p>
<?php
    include("indexForm.php");
?>
<?php
    if ($_POST == NULL && $_FILES == NULL) {
        echo "";
    } else {
    ?>
<h3 class="mt-3">Bonjour <?= $_POST["civilite"] . " " . $_POST["prenom"] . " " . $_POST["nom"] . "! Votre fichier " .
        $_FILES["fichier"]["name"] . " de type " . $_FILES["fichier"]["type"] . " est bien enregistré !" ?>
</h3>
<?php
    }
    ?>
<?php
    echo '<pre>';
    var_dump($_GET, $_POST, $_FILES);
    echo '</pre>';
    ?>
<hr>
<h3>Exercice 44</h3>
<p>Avec le formulaire de l'exercice 3, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être
    affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse. <br>
    (résultat au dessus)</p>
<hr>
<h3>Exercice 45</h3>
<p><br>
</p>

<hr>
<h3>Exercice 46</h3>
<p>Faire une page HTML permettant de donner à l'utilisateur :<br>
    - son User Agent<br>
    - son adresse ip<br>
    - le nom du serveur</p>
<a class="btn btn-outline-primary" href="./infosServer.php" role="button">Vos infos serveur</a>

<hr>
<h3>Exercice 47</h3>
<p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname,
    firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.<br>
    Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
<?php
    if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
        $_SESSION["lastname"] = $_POST["nom"];
        $_SESSION["firstname"] = $_POST["prenom"];
    }
    $_SESSION["age"] = 39;
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    ?>
<a class="btn btn-outline-primary" href="./session.php" role="button">Vos infos session</a>
<hr>
<h3>Exercice</h3>
<p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du
formulaire, stocker les informations dans un cookie.</p>
    <a class="btn btn-outline-primary" href="./formulaireCookie.php" role="button" type="submit">Tu veux un cookie ?</a>
<?php
    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';
    ?>
<hr>
<h3>Exercice</h3>
<p><br>
</p>
<?php

    ?>
<!-- A mettre en forme
    # PHP - Les dates
    
    **Pour tous les exercices, vous pouvez utiliser le site <http: //php.net>**
        **N'hesitez pas à faire des pages avec du HTML/CSS**
    
        ## Exercice 1
    
        Afficher la date courante en respectant la forme **jj/mm/aaaa** _(ex : 16/05/2016)_
    
        ## Exercice 3
    
        Afficher la date courante avec le jour de la semaine et le mois en toutes lettres _(ex : mardi 2 août 2016)_
        **Bonus** : Le faire en français.
    
        ## Exercice 4
    
        Afficher le timestamp du jour.
        Afficher le timestamp du mardi 2 août 2016 à 15h00.
    
        ## Exercice 5
    
        Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
    
        ## Exercice 6
    
        Afficher le nombre de jour dans le mois de février de l'année 2016.
    
        ## Exercice 7
    
        Afficher la date du jour + 20 jours.
    
        ## Exercice 8
    
        Afficher la date du jour - 22 jours -->