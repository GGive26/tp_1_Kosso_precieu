<?php
function PasswordLength($Password){
    //le mot de passe comprendra entre 6 et 10 caractère
    $length = strlen($Password);
    $responses="";
    $collect="reussi";
    if ($length<6){
       echo $responses='Le mot de passe ne correspond pas aux critères'
        ;
    }
    elseif($length>10){
       echo $responses ='Le mot de passe ne correspond pas aux critères';
    } 
    return $responses; 
}


function addSAlt($cle){
    $salt="precieudieudonne";
    $saltedName=$salt.$cle.$salt;
    return $saltedName;
}
function codage($cle){
    $EncodName= sha1($cle);
    return $EncodName;
}
?>