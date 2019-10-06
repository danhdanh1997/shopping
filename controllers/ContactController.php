<?php   
require_once 'controllers/Controller.php';
    class ContactController extends Controller
    {
        function getcontact()
        {
            $data=[];
            return $this->loadView('contact','contact',$data);
        }
    }
?>