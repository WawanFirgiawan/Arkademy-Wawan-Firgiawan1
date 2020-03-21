<?php
// Program Validasi Akun Login
function is_username_valid($username){
    if (preg_match('/^[a-z]{9}$/', $username)){
    echo 'True <br> ';
    }
    else{
    echo 'False <br> ';
    }
}
is_username_valid('cod3r'); //username tidak valid = false
is_username_valid('wawanfirg'); //username valid = true

// Password
function is_password_valid($password){
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $special_char = preg_match('@\W@', $password);


    if(!$uppercase || !$lowercase || !$number || strlen($password) == 9 || !$special_char) {
        echo "False";
    }else{
        if(preg_match('/#/', $password)){
            echo "True <br>";
        }else{
        echo " False <br>";
     }
    }
}
is_password_valid('p@ssW0rd#1'); //username tidak valid = true
is_password_valid('C0d3Yonkoaprohr!@'); //username tidak valid = false

?>