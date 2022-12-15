# Bases de données SQL

Il existe plusieurs sortes de BDD :

- BDD hiérarchique
- BDD réseau
- BDD SQL ou relationnelle
- BDD orientée objet
- BDD distribuée
- BDD cloud
- BDD NoSQL
- BDD Graphique

Nous allons travailler avec la BDD SQL ou relationnelle.

## SQL (Structured Query Language)

C'est un langage qui permet de ma,ipuler les données stockées : voir <https://sql.sh/>
Pour accéder aux données SQL on passe par un serveur de données que l'on appelle mysql sous une certaine version.
Nous allons avoir besoin d'un logiciel qui permette de manipuler plus facilement les données.
Nous en avons un dans notre environnement web qui se nomme phpMyAdmin.

Avant toute chose il faut réfléchir aux différentes tables que nous aurons à créer et à leurs liaisons entre elles.

Exemple : un site de location d'appartements

- prévoir table membres
- prévoir table appartement
- prévoir table réservation
- pour chaque table -> prévoir les champs

## Les différentes liaisons entre les tables -> comment sont-elles en relation ?

Pour faire tout ce travail, on doit se lancer dans la modélisation conceptuelle de données (MCD)

https://www.base-de-donnees.com/mcd/
On va représenter graphiquement le fonctionnement de notre bdd.
- conventions : 
    - Le titre de la table
    - Le nom des différents champs avec le typage 

- exercice créer la table membre avec les champs correspondant au formulaire du tp1
    - création d'une base de données tp1Php avec PhpMyAdmin

Php manipule les données de la bdd avec des requêtes au langage sql à travers 4 notions que l'on appelle le C.R.U.D.
- Create
- Read
- Update
- Delete

En langage sql:
    - pour utiliser create :
        - INSERT into nom_de_la_table (les champs concernés avec une , entre chaque champ)
        - VALUE (leur valeurs entre "" avec une , entre chaque valeur) on peut avoir des conditions derrière (ex: WHERE)

    - pour utiliser read :
        - SELECT nom_du_champ FROM nom_du_tableau
        Peut-être suivi d'options et/ou de conditions comme ORDER BY, WHERE, etc.
        Exemple si je veux toutes les lignes d'une table :
            SELECT * FROM membre

    - Pour utiliser update :
        - UPDATE nom_de_la_table SET champ_1 = 'valeur_1', champ_2 = 'valeur_2', champ_3 = 'valeur_3' WHERE condition
        Exemple:
        UPDATE membre set nom = 'Valtat', prenom = 'Amandine', ... WHERE id_membre = 1

    - Pour utiliser delete :
        - DELETE FROM nom_de_la_table WHERE condition
        Exemple si je veux effacer une ligne de ma table membre :
            DELETE FROM membre WHERE nom = 'Valtat'