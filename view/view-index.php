<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TP3 - Gestion de l'IIA</title>
    </head>
    <body>
        <h1>TP3 - Gestion de l'IIA</h1>
        <?php

        // Connexion à la BDD 
        include('../php/login-db.php');

        // Requete SQL récupérant toutes les promotions de la BDD afin de les stocker dans une variable
        $promotions = $db->query('SELECT * FROM promotion');

        echo 'Promotions: ';
        echo '<br/>';

        while ($promotion = $promotions->fetch()) {
            echo '<p>';
                echo '<a href=view-promotion.php?id=' , $promotion["id"] , ">";
                    echo $promotion['nom'];
                echo '<a/>';
            echo '<p/>';         
        }

        ?>
        
        </br>
        <a href="../php/manage-promotion.php">
            <input type="button" value="Gestion des promotions">
        </a>
        </br></br>
        <a href="../php/manage-student.php">
            <input type="button" value="Gestion des etudiants">
        </a>

    </body>
</html>


