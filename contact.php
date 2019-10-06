<?php
    require_once 'controllers/ContactController.php';
    $contact=new ContactController();
    return $contact->getcontact();
?>