<?php


if(isset($_POST["submit"])){

    //Grabiing the data
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
   
    // Instantiate signupcontr class
    include "../classes/db.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    //include "../classes/login-logs.classes.php";
    

    $login = new LoginContr($uid, $email, $pwd);

    // // running error ghandler and user signup
    $login->loginUser();

    

    //going to back to front page
    header("location: ../index.php?error=none");
    
   
}
else{
    
}