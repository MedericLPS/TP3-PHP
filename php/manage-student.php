<?php
    var_dump($_POST);
    // Connexion à la BDD 
    include('../php/login-db.php');
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des etudiants</title>
</head>
<body>
    <h1>Gestion des etudiants</h1>
    <a href="../view/view-index.php">
        <input type="button" value="Retour">
    <a/>
    </br></br>
    <form name="SELECT PROMOTION" action="" method="post" enctype="multipart/form-data">   
    <div>
    <label for="selectPromotion">Promotion </label>
                <select name="selectPromotion"  id=" " required>
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
            <input type="submit" value="Selectionner"/>
        </div>
        </br>
        <hr>
        </br>
        <div>
        <p>Eleves de la promotion:</p>
            <?php
            
            if (isset($_POST['selectPromotion'])) {
                $promotionShow = $db->prepare('SELECT * FROM etudiant WHERE promotion = (:id)');
                $promotionShow->execute([':id' => $_POST['selectPromotion']]);


            }

            ?>
        </div>
    </form>
</body>
</html>