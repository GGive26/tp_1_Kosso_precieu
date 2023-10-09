<?php
require_once('widgets.php');
$cle = $_POST['password'];
if ($_POST){ 
    function Encodage($cle){
        $precieu= addSAlt($cle);
        echo$precieu;
        echo"<br";
        codage($cle);
    }
function verification(){
    $cle = $_POST['password'];
    if(empty($cle)){
        echo"<br>Vous n'avez pas entrer de mot de passe ";
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
    else{ echo"Veuillez retourner sur la page précedente et entrer un mot de passe valide ";
    }
}
verification();
}
?>
<br><br>
<a href="index.php" >Précedent</a>