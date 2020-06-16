<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TP3 - Gestion de l'IIA</title>
    </head>
    <body>
        <h1>TP3 - Gestion de l'IIA</h1>
        <a href="view-index.php">
            <input type="button" value="Retour">
        <a/>
        </br></br>
        <?php

        // Connexion à la BDD 
        include('../php/login-db.php');

        $etudiants = $db->query('SELECT * FROM etudiant WHERE promotion =' . $db->quote($_GET['id']) . ' ORDER BY nom ASC, prenom ASC');

        echo 'Etudiants: ';
        echo '<br/>';

        while ($etudiant = $etudiants->fetch()) {
            echo '<p>' , $etudiant['nom'] , ' ', $etudiant['prenom'], '<p/>';
            
        }
        
        ?>
    </body>
</html>


