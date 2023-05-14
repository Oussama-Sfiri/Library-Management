<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <?php include 'connect.php' ;?>
    <style><?php include 'style.css'; ?></style>
    <title>Modifier un usager</title>
</head>
<body>

  <?php 
      $id = $_GET['updateid'] ;
      $selectSQL = "SELECT * FROM `usagers` WHERE id_personne=$id" ;
      $result=@mysql_query($selectSQL,$idcon);
      $row = mysql_fetch_assoc($result) ;
      $id_Orig = $row['id_personne'] ;
      $Nom_Orig = $row['nom'] ;
      $Prenom_Orig = $row['prenom'] ;
      $Adresse_Orig = $row['addresse'] ;
      $Statut_Orig = $row['statut'] ;
      $Email_Orig = $row['email'] ;
      if(isset($_POST['Modifier'])) {
        $Nom = $_POST['nom'] ;
        $Prenom = $_POST['prenom'] ;
        $Adresse = $_POST['adresse'] ;
        $Statut = $_POST['statut'] ;
        $Email = $_POST['email'] ;
        $updatetSQL = "UPDATE `usagers` SET  `nom`='$Nom' ,`prenom`='$Prenom' ,`addresse`='$Adresse' ,`statut`='$Statut' ,`email`='$Email' WHERE id_personne=$id " ;
        $result=@mysql_query($updatetSQL,$idcon);
        if($result){
          echo "<script type=\"text/javascript\"> alert('usager Modifier avec succces'); 
          window.location.href = \"http://localhost/library_management/gestionUsagers.php\";
                </script>";
        }else {
          echo "<script type=\"text/javascript\"> alert('Erreur : ".mysql_error()."')</script>";
        }
      }
?>


  <section class="section_form">
    <form id="consultation-form" class="feed-form" method="POST">
      <label for="nom">Nom</label>
      <input name="nom" type="text" value="<?php echo $Nom_Orig ;?>">
      <label for="prenom">Prenom</label>
      <input name="prenom" type="text" value="<?php echo $Prenom_Orig ;?>">
      <label for="adresse">Adresse</label>
      <input name="adresse"  type="text" value="<?php echo $Adresse_Orig ;?>">
      <label for="email">Email</label>
      <input name="email"  type="text" value="<?php echo $Email_Orig ;?>">
      <div class="mydict">
          <div>
              <label><input type="radio" name="statut" checked="" value="Etudiant">
              <span>Etudiant</span>
              </label>
              <label><input type="radio" name="statut" value="Enseignant">
              <span>Enseignant</span>
              </label>
          </div>
      </div>
      <button class="button_submit" type="submit" name="Modifier" >Modifier</button>
    </form>
  </section>

</body>
</html>


