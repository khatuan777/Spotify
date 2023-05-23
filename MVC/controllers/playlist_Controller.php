<?php


class playlist_Controller extends Controller
{
    function indexAction()
    {
        // Model 
        $song = $this->model('song');
        $album = $this->model('album');
        $artist = $this->model('artist');
        $category = $this->model('category');
        $user = $this->model('user');
        $playlist = $this->model('playlist');
        $this->view('playlist', [
            'basehref' => getBaseURL() . '/playlist',
            'title' => 'Playlist | Spotify',
            'category' => $category->find(),
            'playlist' => $playlist->find('*', ['userID' => getSession()]),
            'user' => $user->findOne('*', ['userID' => getSession()])
        ]);
    }
    function createPlaylist()
    {
        $this->model('playlist')->createPlaylist(getSession(), 'My_playlist');
        echo "<script> 
        location.href = '" . getBaseURL() . "/'
        </script>";
    }
    function deletePlaylist()
    {
    }
    function addSong()
    {
    }
}
