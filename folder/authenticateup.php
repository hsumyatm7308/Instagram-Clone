<?php

ini_set("display_errors", 1);

require_once "./sessionconfig.php";
require_once "./dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $getemail = textfilter($_POST["email"]);
    $getfullname = textfilter($_POST["fullname"]);
    $getusername = textfilter($_POST["username"]);
    $getpassword = md5(textfilter($_POST["password"]));





    // var_dump($getemail, $getfullname, $getusername, $getpassword);

    if ($getemail && $getpassword) {

     

        try {
            $stmt = $conn->prepare("INSERT INTO instauser (fullname, username, email, password) VALUES (:fullname, :username, :email, :password)");

            $stmt->bindParam(":fullname", $fullname);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);


            $fullname = $getfullname;
            $username = $getusername;
            $email = $getemail;
            $password = $getpassword;





            if ($stmt->execute()) {


                setsession("email", $email);
                setsession("password", $password);
                redirectto("./instapage/index.php");
                //  header("Location:");

            } else {


            }



            echo "Data inserted successfully!";
        } catch (PDOException $e) {
            echo "Error inserting data: " . $e->getMessage();
        }




        $conn = null;


        

           
    }


    


}

function textfilter($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}



?>