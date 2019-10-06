
<?php
    require_once 'controllers/Controller.php';
    class AccountController extends Controller
    {
        function getaccount()
        {
            $data=[];
            return $this->loadView('account','account',$data);
        }
    }
?>