<!DOCTYPE html>
<html>
<head>
    <title>Ajout d'une promotion</title>
</head>
<body>
    <h1>Ajout d'une promotion</h1>
    <a href="../view/view-index.php">
        <input type="button" value="Retour">
    <a/>
    </br>
    <hr>
    </br>
    <?php
    
    // Connexion à la BDD 
    include('../php/login-db.php');
    
    ?>
    <form name="ADD PROMOTION" action="" method="post" enctype="multipart/form-data">   
        <div>
            <label for="nom">Promotion </label> 
            <input name="PromotionAdd" type ="text" id="PromotionAdd"/> 
        </div>
        </br>
        <div>
            <input type="submit" value="Ajouter" onclick="<?php
            // A FAIRE: BOUTTON D'AJOUT D'UNE PROMOTION EN FONCTION D'UN NOM ENTRE (VERIFICATIONS A FAIRE ?)
            $add = $db->exec('INSERT INTO promotion (id, nom) VALUES (NULL, BTS Z1)');
            ?>"/>
        </div>
    </br>
    <hr>
    </br>    
    <form name="DELETE PROMOTION" action="" method="post" enctype="multipart/form-data">   
    <div>
    <label for="PromotionDelete">Promotion </label>
                <select name=" "  id=" " required>
                <?php 
                // Liste déroulante des Promotions disponibles
                $reponse = $db->query('SELECT * FROM promotion');
                              while ($donnees = $reponse->fetch())
				{
				?>
				<option value="<?php echo $donnees['id']; ?>"> 
				<?php echo $donnees['nom']; ?>
				</option>
				<?php } ?>
		        </select>
        </br></br>   
        <div>
            <input type="submit" value="Supprimer" onclick="<?php

            // PARTIE A RE-ADAPTER PAR RAPPORT AUX AUTRES REQUETES
            $delete = $db->query('DELETE * FROM promotion WHERE id=' . $donnees->quote($_GET['id']));
            
            ?>"/>
        </div>
        </br>
        <hr>
    </form>
</body>
</html>