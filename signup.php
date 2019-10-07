<?php
require_once 'controllers/SignupController.php';
    $sigup=new  SignupController();
    echo  $sigup->getCheckoutPage();
    if(isset($_POST['submit']))
     return $sigup->checkaccount();
return SignupController::getCheckoutPage();
?>