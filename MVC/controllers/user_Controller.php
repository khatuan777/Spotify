<?php

class user_Controller extends Controller
{
    function indexAction()
    {
        $playlist = $this->model('playlist');
        $user = $this->model('user');
        $album = $this->model('album');
        $this->view('user', [
            'basehref' => getBaseURL() . '/user',
            'title' => 'User | Spotify',
            'user' => $user->findOne('*', ['userID' => getSession()]),
            'playlist' => $playlist->find('*', ['userID' => getSession()]),
            'album' => $album->findOne('*', ['albumID' => getID()])
        ]);
    }
    function updateUser()
    {
        $userID = getSession();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $birth = $_POST['birth'];

        $data = $this->model('user')->updateUser($userID, $username, $email, $password, $gender, $birth);
        if ($data) {
            echo "<script> alert('Cập nhật thành công!!!');
            location.href = '" . getBaseURL() . "/user '</script>";
        }
    }
}
