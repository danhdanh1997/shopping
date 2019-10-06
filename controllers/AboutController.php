<?php
    require_once 'controllers/Controller.php';
    class AboutController extends Controller
    {
        function getabout()
        {
            $data=[];
            return $this->loadView('about','about',$data);
        }
    }
?>