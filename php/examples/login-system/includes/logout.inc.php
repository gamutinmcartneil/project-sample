<?php


session_start();
session_unset();
session_destroy();

//going to back to front page
header("location: ./login.php");