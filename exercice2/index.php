<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas supérieur à 20 :
            - multiplier la première variable avec la deuxième
            - afficher le résultat
            - incrementer la première variable -->
        <title>Exercice 2 de la partie 3 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration de deux variables initialisées à 0 pour la première et à 56 pour la deuxième 
            $number1 = 0;
            $number2 = 56;
// Introduction de la condition avec la structure while
            while ($number1 <= 20) {
                // Instruction : afficher le résultat de multiplication du number1 par le number2
                echo ' ' . $number1 * $number2;
                ?>
                <!--Il faut sortir du php pour inclure la balise html br-->            
                <br>
                <?php
                // Incrémentation de la variable number1
                $number1++;
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