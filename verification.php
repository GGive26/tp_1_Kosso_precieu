<?php
require_once('widgets.php');
$cle = $_POST['password'];
$cle1=$_POST['confirmation'];
if ($_POST){ 
    function Encodage($cle){
        $precieu= addSAlt($cle);
        echo$precieu;
        echo"<br";
        codage($cle);
    }
function verification(){
    $cle = $_POST['password'];
    $cle1=$_POST['confirmation'];
    if($cle===$cle1){
    if(empty($cle)){
        echo"<h3>ERREUR</h3><br>Vous n'avez pas entrer de mot de passe ";
        $success=false;
    }
    else{
        echo"<br>Votre mot de passe est : ".$cle;
        $success=true;
    }
    echo"<br>";
    echo"<br>";
    if($success){
    $verification1= PasswordLength($cle);
     if(!$verification1){
        echo"<br>";
        echo"<p>Vous pouvez voir ici le codage de votre mot de passe 
        d'abord avec ajout de sel ensuite avec du sha1 </p>";
     Encodage($cle);
     echo"<br>";
     }
    }
    else{ echo"<h3>ERREUR</h3>Veuillez retourner sur la page précedente et entrer un mot de passe valide ";
    }
}
else if($cle!=$cle1) echo"<h3>ERREUR</h3><p>Vos deux mot de passe ne sont pas identique veuillez le réecrire correctement</p>";
}
verification();
}
?>
<br><br>
<a href="index.php" >Précedent</a>