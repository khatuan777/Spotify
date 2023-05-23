<?php

require_once './MVC/core/utils/Basehref.php';

class auth_Controller extends Controller
{
    function indexAction()
    {
        $this->view('login', [
            'title' => 'Spotify - Login',
            'basehref' => getBaseURL() . '/login',
        ]);
    }
    function authLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = $this->model('Auth')->Login($email, $password);
        if (!$data) {
            echo "<script> alert('Nhập sai thông tin');
            location.href = '" . getBaseURL() . "/auth '</script>";
        } else {
            // Lưu thông tin vào biến session cục bộ
            $_SESSION['user'] = $data['userID'];
            header('Location:' . getBaseURL() . '/');
        }
    }

    function signup()
    {
        $this->view('signup', [
            'basehref' => getBaseURL() . '/auth',
            'title' => 'Spotify - Sign up'
        ]);
    }

    function authSignup()
    {
        $user =  $this->model('user');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userName = $_POST['userName'];
        $birth = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
        $gender = $_POST['gender'];



        $data = $this->model('Auth')->Signup($userName, $password, $email, $gender, $birth);
        if ($data != '') {
            echo $data;
        } else {
            echo "<script>alert('Đăng ký thất bại'); 
                location.href = '" . getBaseURL() . "/auth/signup'
                </script>";
        }
    }
    function checkemail($email)
    {
        $user = $this->model('user');
        $arr = [];
        array_push($arr, $user->find()['email']);
        if (in_array($email, $arr)) {
            echo "<script> $('.alert').removeClass('d-none', function() {
                $'.alert').text('Tên email bị trùng!!!')
            });
            </script>";
        }
    }
    function logout()
    {
        session_destroy();
        header('Location:' . getBaseURL() . '/');
    }
}
