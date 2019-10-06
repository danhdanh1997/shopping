<?php
 require_once 'controllers/AboutController.php';
 $about= new AboutController();
 return $about->getabout();
?>