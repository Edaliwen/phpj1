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
    <title>PHP Exercices</title>
</head>
<body>
    <header class="container-fluid bg-info text-light py-2">
        PHP : Exercices
    </header>
    <main class="container">
    
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
                for($i = 0; $i < count($months); $i++){
                    echo '<div class="col">' . $months[$i] . '</div>';
                }
                echo '</div>';

            ?>
    <hr>
            <h3>Exercice 19</h3>
            <p>Afficher les valeurs du tableau $hautsDeFrance avec une boucle.</p>
            <?php
               
                foreach($hautsDeFrance as $item){
                    echo '<p>' . $item . '</p>';
                }
            ?>
    <hr>
            <h3>Exercice 20</h3>
            <p>Afficher les valeurs du tableau $hautsDeFrance ainsi que les clés associées.</p>
            <?php
              foreach($hautsDeFrance as $key => $value){
                echo '<p>Le département ' . $value . ' a le numéro ' . $key . '.</p>';
            }
            ?>
    </main>
    <footer>

    </footer>
    <!-- js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>