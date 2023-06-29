<?php


ini_set("display_errors",1);

require_once "./sessionconfig.php";
require_once "./dbconnect.php";


        // Process login
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $loginemail = textfilter($_POST["email"]);
            $loginpassword = md5(textfilter($_POST["password"]));
    
            if ($loginemail && $loginpassword) {
                loginverify($loginemail, $loginpassword);
            } else {
                echo "Enter email and password";
            }
        }
    



function textfilter($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}







function loginverify($email, $password)
{
    try {


        $conn = $GLOBALS["conn"];
        $stmt = $conn->prepare("SELECT email, password FROM instauser WHERE email = :email AND password = :password");
        $stmt->bindParam(":email", $bindemail);
        $stmt->bindParam(":password", $bindpassword);

        $bindemail = $email;
        $bindpassword = $password;

        formatprint($stmt->fetch(PDO::FETCH_ASSOC));

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                setsession("email", $email);
                setsession("password", $password);
                redirectto("./instapage/index.php");
            } else {
                redirectto("./login.php");
            }
        } else {
            echo "Error executing query";
        }


       }catch(PDOException $e){
        echo "Error Found : ".$e->getMessage();
       }

        echo $email;
        echo $password;

        



}

function formatprint($array)
{
    echo "<pre>" . print_r($array, true) . "</pre>";
}




?>