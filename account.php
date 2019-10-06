<?php
 require_once 'controllers/AccountController.php';
 $about= new AccountController();
 return $about->getaccount();
?>