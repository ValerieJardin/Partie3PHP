<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.-->
        <title>Exercice 7 de la partie 3 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration d'une variable repeat initialisée à 20 dans une boucle for et incrémentation de 15
            for ($repeat = 1; $repeat <= 100; $repeat = $repeat + 15) {
                ?>
                <br>
                <?php
                // Affichage de la variable suivie d'un message
                echo $repeat . ' On tient le bon bout ... Ou pas !';
            }
            ?> 
        </p>
        <!-- Mise en place des boutons de re-direction-->
        <div class="buttons">
            <a href="http://partie3/exercice1"><button>Exercice 1</button></a>
            <a href="http://partie3/exercice2"><button>Exercice 2</button></a>
            <a href="http://partie3/exercice3"><button>Exercice 3</button></a>
            <a href="http://partie3/exercice4"><button>Exercice 4</button></a>
            <a href="http://partie3/exercice5"><button>Exercice 5</button></a>
            <a href="http://partie3/exercice6"><button>Exercice 6</button></a>
            <a href="http://partie3/exercice7"><button>Exercice 7</button></a>
            <a href="http://partie3/exercice8"><button>Exercice 8</button></a>
        </div>
    </body>
</html>