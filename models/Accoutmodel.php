<?php
require_once 'DBconnect.php';

    class Accountmodel extends DBconnect
    {
        function insertuser($username,$fullname,$birthday, $gender, $email, $address,$password, $phone){
            $sql = "INSERT INTO user
                    (username, fullname,birthday,gender,address,email,password,phone)
                    VALUES 
                    ('$username','$fullname','$birthday','$gender','$email','$address','$password','$phone')";
            $check = $this->executeQuery($sql);
            if($check) return $this->getRecentIdInsert();
            return false;
        } 
    }
?>