<?php
function PasswordLengthIsValid($PasswordToValid){
    //le mot de passe comprendra entre 6 et 10 caractère
    $length = strlen($PasswordToValid);
    $responses=[
        'isValid'=>true,
        'msg'=>''
    ];
    if ($length<2){
        $responses=[
            'isValid'=>false,
            'msg'=>'Le mot de passe ne correspond pas aux critères'
        ];
    }elseif($length>10){
        $responses=[
            'isValid'=>false,
            'msg'=>'Le mot de passe ne correspond pas aux critères'
        ];
    }
return $responses;    
}
?>