
<?php
    header('Content-Type: text/html; charset=utf-8');
    require_once 'models/DBConnect.php';

    // Vì tên button submit là do-register nên ta sẽ kiểm tra nếu
    // tồn tại key này trong biến toàn cục $_POST thì nghĩa là người 
    // dùng đã click register(submit)
    if (isset($_POST['submit']))
    {
        // Lấy thông tin
        // Để an toàn thì ta dùng hàm mssql_escape_string để
        // chống hack sql injection
        $username   = isset($_POST['username']) ? mysql_escape_string($_POST['username']) : '';
        $fullname   = isset($_POST['fullname']) ? mysql_escape_string($_POST['fullname']) : '';
        $birthday  = isset($_POST['birthday ']) ? mysql_escape_string($_POST['birthday ']) : '';
        $gender   = isset($_POST['gender ']) ? mysql_escape_string($_POST['gender ']) : '';
        $address   = isset($_POST['address']) ? mysql_escape_string($_POST['address']) : '';
        $password   = isset($_POST['password']) ? md5($_POST['password']) : '';
        $email      = isset($_POST['email'])    ? mysql_escape_string($_POST['email']) : '';
        $phone      = isset($_POST['phone'])    ? mysql_escape_string($_POST['phone']) : '';
       
        
        // Validate Thông Tin Username và Email có bị trùng hay không
        
        // Kết nối CSDL
       $conn=new DBConnect();
        // Kiểm tra username hoặc email có bị trùng hay không
        $sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
        
        // Thực thi câu truy vấn
        $result = executeQuery($conn, $sql);
        
        // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
        if (mysqli_num_rows($result) > 0)
        {
            // Sử dụng javascript để thông báo
            echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="index.php";</script>';
            
            // Dừng chương trình
            die ();
        }
        else {
            // Ngược lại thì thêm bình thường
            $sql = "INSERT INTO user (username, fullname,birthday,gender,address,email,password,phone ) VALUES ('$username','$fullname','$birthday','$gender','$email','$password','$phone')";
            
            if (executeQuery($conn, $sql)){
                echo '<script language="javascript">alert("Đăng ký thành công"); window.location="index.php";</script>';
            }
            else {
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="index.php";</script>';
            }
        }
    }
?>