<?php


session_start();


function setsession($key, $val)
{

    $_SESSION[$key] = $val;

}

function unsersession($key){
    
    unset($_SESSION[$key]);
}


function authecheck()
{
    if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
       return true;
    }
}

function redirectto($url)
{

    header("Location:$url");

}



?>