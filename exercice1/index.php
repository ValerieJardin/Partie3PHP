<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Créer une variable et l'initialiser à 0.
            Tant que cette variable n'atteint pas 10, il faut :
            - l'afficher
            - l'incrementer -->
        <title>Exercice 1 de la partie 3 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration d'une variable number et l'initialiser à 0
            $number = 0;
// Introduction de la condition avec la structure while
            while ($number <= 10) {
// Instruction
                echo 'Je me répète !! ';
                ?>
                <!--Il faut sortir du php pour inclure la balise html br-->            
                <br>
                <?php
                $number++;
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