<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas inférieur ou égale à 10 :
            - multiplier la première variable avec la deuxième
            - afficher le résultat
            - décrémenter la première variable -->
        <title>Exercice 3 de la partie 3 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration de deux variables et les initialiser
            $number1 = 100;
            $number2 = 56;
// Introduction de la condition avec la structure while
            while ($number1 > 10) {
                // Instruction : afficher le résultat de la multiplication du number1 par number2 
                echo 'Nombre1 x Nombre2 = ' . $number1 * $number2;
                ?>
                <!--Il faut sortir du php pour inclure la balise html br-->            
                <br>
                <?php
                // Décrémentation de la variable number1
                $number1--;
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