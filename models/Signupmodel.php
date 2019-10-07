<?php
require_once 'DBconnect.php';

    class Signupmodel extends DBconnect
    {
        function insertuser($username,$password,$fullname,$birthday, $gender,$address,  $email, $phone){
            $sql = "INSERT INTO user
                    (username,password, fullname,birthday,gender,address,email,phone)
                    VALUES 
                    ('$username','$password','$fullname','$birthday','$gender','$address','$email','$phone')";
            $check = $this->executeQuery($sql);
            if($check) return $this->getRecentIdInsert();
            return false;
        } 
    }
?>