<?php

class album_Controller extends Controller
{
    function indexAction()
    {
        $song = $this->model('song');
        $artist = $this->model('artist');
        $playlist = $this->model('playlist');
        $user = $this->model('user');
        $album = $this->model('album');
        $currentAlbum = $album->findOne('*', ['albumID' => getID()]);
        $this->view('album', [
            'basehref' => getBaseURL() . '/album',
            'title' => 'Albums | Spotify',
            'currentAlbum' => $currentAlbum,
            'artist' => $artist->findOne('*', ['artistID' => $currentAlbum['artistID']]),
            'songList' => $song->find('*', ['albumID' => getID()]),
            'album' => $album,
            'user' => $user->findOne('*', ['userID' => getSession()]),
            'playlist' => $playlist
        ]);
    }
}