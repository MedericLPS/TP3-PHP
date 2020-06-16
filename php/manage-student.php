<?php
    var_dump($_POST);
    // Connexion à la BDD 
    include('../php/login-db.php');
    
    /*if (isset($_POST['nom']) && isset($_POST['prenom'])) {
        $studentAdd = $db->prepare('INSERT INTO etudiant (:id, prenom, nom, promotion) VALUES (NULL, prenom, nom, 1)');
        $studentAdd->execute([':id' => $_POST['studentAdd']]);
    }*/


?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des etudiants</title>
</head>
<body>
    <h1>Gestion des etudiants</h1>
    <p>CETTE PARTIE DU TP N'EST PAS DU TOUT FONCTIONELLE MAIS PERMET DE CHOISIR UNE PORMOTION ET LISTER SES ELEVES !</p>
    <p>LES CROIX AVAIENT POUR BUT DE SUPPRIMER UN ELEVE D'UN SEUL CLIC</p>
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
        </form>
        </div>
        </br>
        <hr>
        </br>
        <form name="DELETE STUDENT" action="" method="post" enctype="multipart/form-data">
            <?php
            
            if (isset($_POST['selectPromotion'])) {
                $promotionShow = $db->prepare('SELECT * FROM etudiant WHERE promotion = (:id) ORDER BY nom ASC, prenom ASC');
                $promotionShow->execute([':id' => $_POST['selectPromotion']]);
                echo 'Eleves de la promotion: ';

                while ($promotionStudent = $promotionShow->fetch()) {
                    echo '<p> ⠄' , $promotionStudent['nom'] , ' ', $promotionStudent['prenom'], ' <input type="submit" value="X"/><p/>'; 
                }
            }

            ?>
        </form>
</body>
</html>