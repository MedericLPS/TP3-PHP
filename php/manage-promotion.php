<?php
    var_dump($_POST);
    // Connexion à la BDD 
    include('../php/login-db.php');

    // Ajout d'une promotion
    if (isset($_POST['addPromotion'])) {
        $promotionAdd = $db->prepare('INSERT INTO promotion (nom) VALUES (:nom)');
        $promotionAdd->execute([':nom' => $_POST['addPromotion']]);
    }

    
    // Suppression d'une promotion
    if (isset($_POST['deletePromotion'])) {
        $promotionDelete = $db->prepare('DELETE FROM promotion WHERE promotion.id =(:id)');
        $promotionDelete->execute([':id' => $_POST['deletePromotion']]);
    }
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des promotions</title>
</head>
<body>
    <h1>Gestion des promotions</h1>
    <a href="../view/view-index.php">
        <input type="button" value="Retour">
    <a/>
    </br>
    <hr>
    </br>
    <form name="ADD PROMOTION" action="" method="post" enctype="multipart/form-data">   
        <div>
            <label>Promotion </label> 
            <input name="addPromotion" type ="text"/> 
        </div>
        </br>
        <div>
            <input type="submit" value="Ajouter"/>
        </div>
        </br>
        <hr>
        </br>
    </form>    
    <form name="DELETE PROMOTION" action="" method="post" enctype="multipart/form-data">   
    <div>
    <label for="deletePromotion">Promotion </label>
                <select name="deletePromotion"  id=" " required>
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
            <input type="submit" value="Supprimer"/>
        </div>
        </br>
        <hr>
    </form>
</body>
</html>