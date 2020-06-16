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
    
    include('../php/login-db.php');
    
    ?>
    <form name="ADD PROMOTION" action="" method="post" enctype="multipart/form-data">   
        <div>
            <label for="nom">Promotion </label> 
            <input name="PromotionAdd" type ="text" id="PromotionAdd"/> 
        </div>
        </br>
        <div>
            <input type="submit" value="Ajouter"/>
        </div>
    </br>
    <hr>
    </br>    
    <form name="DELETE PROMOTION" action="" method="post" enctype="multipart/form-data">   
    <div>
    <label for="PromotionDelete">Promotion </label>
                <select name=" "  id=" " required>
			    <?php $reponse = $db->query('SELECT * FROM promotion');
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