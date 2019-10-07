
<?php

    require_once 'controllers/Controller.php';
    require_once 'models/Signupmodel.php';
    require_once 'helpers/Cart.php';
    require_once 'helpers/functions.php';
    require_once 'helpers/PHPMailer/sendmail.php';
    session_start();
    class SignupController extends Controller
    {
        static function getCheckoutPage(){
            return parent::loadView('signup');
        }
        function checkaccount()
        {
            if( $_POST['username'] =='' ||$_POST['fullname'] =='' || $_POST['email'] == '' || $_POST['gender'] == '' || $_POST['phone'] == '' || $_POST['address'] == '' || $_POST['birthday']==''||$_POST['password'] ==''){
                $_SESSION['error'] = 'Vui lòng điền đầy đủ thông tin';
                print_r($_SESSION['error']);
                header('Location: http://localhost/shopping/signup.php');
                return;
            }
            $username=$_POST['username'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $birthday=$_POST['birthday'];
            $password = $_POST['password'];
            if (!$username || !$password || !$email || !$fullname || !$birthday || !$gender || !$address || !$phone )
            {
                echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
            $model = new Signupmodel();
            $iduser = $model->insertuser($username,$password,$fullname,$birthday, $gender,$address,  $email, $phone);
            if(!$iduser){
                $_SESSION['error'] = 'Vui lòng thử lại 1';
                header('Location: http://localhost/shopping/index.php');
                return;
            }
        }
    }
?>