<?php

require_once "../sessionconfig.php";


unsersession("email");
unsersession("password");

if(authecheck()){
    redirectto('../login.php');
}


?>