
<?php
    require_once 'controllers/Controller.php';
    require_once 'models/Accoutmodel.php';

    class AccountController extends Controller
    {
        function getaccount()
        {
            $data=[];
            return $this->loadView('account','account',$data);
        }
    }
?>