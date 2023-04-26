<?php

if(isset($_POST["submit"]))
{
   //Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
   
   //Instanciate SignupContr class
   include "../classes/dbh.classes.php";
   include "../classes/login.classes.php";
   include "../classes/login_contr.classes.php";
   $login = new LoginContr($uid, $pwd);


   //Running Error handlers and user signup
   $login->loginUser();

   //Going back to front page
   header("location: ../index.php?error=none");

}