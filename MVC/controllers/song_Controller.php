<?php

class song_Controller extends Controller
{
    function indexAction()
    {
        $song = $this->model('song');
        $artist = $this->model('artist');
        $playlist = $this->model('playlist');
        $user = $this->model('user');
        $album = $this->model('album');
        $currentSong = $song->findOne('*', ['songID' => getID()]);
        $this->view('song', [
            'basehref' => getBaseURL() . '/',
            'title' => 'Track | Spotify',
            'currentSong' => $currentSong,
            'artist' => $artist->getartistName($currentSong['artistID']),
            'songList' => $song->find('*', ['artistID' => $currentSong['artistID']]),
            'playlist' => $playlist->find('*', ['userID' => getSession()]),
            'user' => $user->findOne('*', ['userID' => getSession()]),
            'album' => $album->find('*', ['artistID' => $currentSong['artistID']])
        ]);
    }
}