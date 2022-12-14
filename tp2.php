<?php
include("assets/inc/headFront.php");
?>
<title>TP2 PHP</title>
<?php
include("assets/inc/headerFront.php");
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-4 form-group">
                <form action="tp2Php.php" method="post">
                    <label for="l1">Votre civilité (choisissez) :</label>
                    <select class="form-control" name="civilite" id="l1">
                        <?php
                        // si "civilite" est égale à Monsieur
                        if ($_POST["civilite"] == "Monsieur"):
                        ?>
                        <!-- on place les lignes d'option ci-dessous avec Mr. selectionné-->
                        <option value="Monsieur" selected>Mr.</option>
                        <option value="Madame">Mme.</option>
                        <?php
                            // sinon si "civilite" est égale à Madame
                        elseif ($_POST["civilite"] == "Madame"):
                        ?>
                        <!-- on place les lignes d'option ci-dessous avec Mme. selectionné-->
                        <option value="Madame" selected>Mme.</option>
                        <option value="Monsieur">Mr.</option>
                        <?php
                            // sinon la clé "civilité" n'existe pas
                        else:
                        ?>
                        <!-- Par default on place les lignes d'option ci-dessous -->
                        <option value="Madame" selected>Mme.</option>
                        <option value="Monsieur">Mr.</option>
                        <?php
                        endif;
                        ?>
                    </select>
                    <label for="l2">Votre nom :</label>
                    <!-- si la clé "nom" existe dans $_POST alors on affiche sa valeur dans le champs input avec l'attribut value" -->
                    <input class="form-control" type="text" name="nom" id="l2" value="<?php if (isset($_POST["nom"])):
                            echo $_POST["nom"];
                        endif; ?>">
                    <label for="l3">Votre prenom :</label>
                    <input class="form-control" type="text" name="prenom" id="l3" value="<?php if (isset($_POST["prenom"])):
                            echo $_POST["prenom"];
                        endif; ?>">
                    <label for="l4">Votre age :</label>
                    <input class="form-control" type="text" name="age" id="l4" value="<?php if (isset($_POST["age"])):
                            echo $_POST["age"];
                        endif; ?>">
                    <label for="l4">La société</label>
                    <input class="form-control" type="text" name="societe" id="l4" value="<?php if (isset($_POST["societe"])):
                            echo $_POST["societe"];
                        endif; ?>">
                    <button class="btn bg-primary text-dark fw-bold mt-3" type="submit">Valider</button>
                </form>
                <?php
                // echo "<pre>";
                //     var_dump($_POST);
                // echo"</pre>";
                if ($_POST == null):
                    echo "";
                else:
                ?>
                <p>Compte de <?= $_POST["civilite"] . " " . $_POST["nom"] . " " . $_POST["prenom"] ?>
                </p>
                <p>Age : <?= $_POST["age"] . "ans" ?>
                </p>
                <p>Société : <?= $_POST["societe"] ?>
                </p>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</main>
<?php
include("assets/inc/footerFront.php");
?>