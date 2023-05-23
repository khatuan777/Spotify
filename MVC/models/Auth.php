<?php
require_once './MVC/core/Init.php';
class Auth extends Init
{
    function Login($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email ='" . $email . "';";
        $data = $this->db->fetch_assoc($sql, 1);
        if (!$data) return null;
        $pw = password_hash($data['password'], 1);
        if (password_verify($password, $pw)) {
            return $data;
        } else {
            return null;
        }
    }
    function Signup($userName, $password, $email, $gender, $birth)
    {
        $sql = "INSERT INTO user (userName, password, email, gender, birth ) VALUES ('" . $userName . "','" . $password . "','" . $email . "','" . $gender . "','" . $birth . "');";
        $result = $this->db->query($sql);

        if ($result) {
            return "<script>alert('Đăng ký thành công!!!. Mời đăng nhập lại'); 
            location.href = '" . getBaseURL() . "/auth'; 
            </script>";
        } else {
            return null;
        }
    }

    function checkEmail($email)
    { 
        
    }

    function logout()
    {
    }
}