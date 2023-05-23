<?php
class home_Controller extends Controller
{
    function indexAction()
    {
        $song = $this->model('song');
        $album = $this->model('album');
        $artist = $this->model('artist');
        $user = $this->model('user');
        $playlist = $this->model('playlist');
        $this->view('home', [
            'basehref' => getBaseURL() . '/',
            'title' => 'Spotify - Website Player',
            'song' => $song->find(),
            'album' => $album->find(),
            'artist' => $artist,
            'playlist' => $playlist->find('*', ['userID' => getSession()]),
            'user' => $user->findOne('*', ['userID' => getSession()])
        ]);
    }
}
