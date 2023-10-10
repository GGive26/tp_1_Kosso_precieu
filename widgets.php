<?php
function PasswordLength($Password){
    //le mot de passe comprendra entre 6 et 10 caractère
    $length = strlen($Password);
    $responses="";
    $collect="reussi";
    if ($length<6){
       echo"<h3>ERREUR</h3>". $responses='Le mot de passe ne correspond pas aux critères'
        ;
    }
    elseif($length>10){
       echo"<h3>ERREUR</h3>".$responses ='Le mot de passe ne correspond pas aux critères';
    } 
    return $responses; 
}


function addSAlt($cle){
    $salt="precieudieudonne";
    $saltedName=$salt.$cle.$salt;
    return $saltedName;
}
function codage($cle){
    $codage=sha1($cle);
    echo $codage;
}
?>