<?php


if(isset($_POST["submit"])){

    //Grabiing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mm = $_POST["mm"];
    $yyyy = $_POST["yyyy"];
    $dd = $_POST["dd"];

    // Instantiate signupcontr class
    include "../classes/db.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    

    $signup = new SignupContr($uid, $pwd, $pwdrepeat,  $fname, $lname, $email,$yyyy, $mm, $dd);

    // running error ghandler and user signup
    $signup->signupUser();

    //going to back to front page
    header("location: ../login.php");
}
else{
    header("location: ../login.php");
    exit();
}