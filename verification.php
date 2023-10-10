<html>
<h1> INTERFACE DE CONFIRMATION</h1>
<?php
require_once('widgets.php');
$cle = $_POST['password'];
$cle1=$_POST['confirmation'];
if ($_POST){ 
    function Encodage($cle){
        $precieu= addSAlt($cle);
        echo"<strong>1er codage</strong>:".$precieu;?><br><?php echo"<strong>2eme codage</strong>:";
        codage($precieu);
    }
function verification(){
    $cle = $_POST['password'];
    $cle1=$_POST['confirmation'];
    if($cle===$cle1){
    if(empty($cle)){
        echo"<h3>ERREUR</h3><br><strong>Vous n'avez pas entrer de mot de passe</strong> ";
        $success=false;
    }
    else{
        echo"<br><strong>Votre mot de passe est</strong> : ".$cle;
        $success=true;
    }
    if($success){
    $verification1= PasswordLength($cle);
     if(!$verification1){
        echo"<br>";
        echo"<p><strong>Notice: le 1er codage de votre mot de passe est l'ajout de sel,
         le 2eme est le langage d'encodage sha1 avec votre ajout de sel  </strong></p>";
     Encodage($cle);
     echo"<br>";
     ?><h2>Verification Reussi</h2><br>
     <h3>Bonne Journée</h3><?php
     }
    }
    else{ echo"<h3>ERREUR</h3><strong>Veuillez retourner sur la page précedente et entrer un mot de passe valide</strong> ";
    }
}
else if($cle!=$cle1) echo"<h3>ERREUR</h3><p><strong>Vos deux mot de passe ne sont pas identique 
veuillez le réecrire correctement</strong></p>";
}
verification();
}
?>
<br><br>
<a href="index.php" >Précedent</a>
</html>