<?php
function verification(){
    require_once('widgets.php');
    if ($_POST){
        $cle = $_POST['password'];
    if(empty($cle)){
        echo"<br>Vous n'avez pas entrer de mot de passe ";}
    else{
        echo"<br>Votre mot de passe est : ".$cle;
    }
    PasswordLengthIsValid($cle);
    }
}
verification();

?>
<br><br>
<a href="index.php" >Précedent</a>