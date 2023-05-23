<?php

require_once './MVC/core/Init.php';
class User extends Init
{
    function updateUser($userID, $username, $email, $password, $gender, $birth)
    {
        $sql = "UPDATE user
        SET username='" . $username . "', password='" . $password . "', email='" . $email . "', gender='" . $gender . "', birth='" . $birth . "'
        WHERE userID=" . $userID . ";";
        $result = $this->db->query($sql);
        if ($result) {
            return "<script>alert('Cập nhật thành công!!!'); 
            location.href = '" . getBaseURL() . "/user'; 
            </script>";
        } else {
            return null;
        }
    }
}
