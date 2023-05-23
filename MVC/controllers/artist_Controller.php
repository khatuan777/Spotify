<?php

class artist_Controller extends Controller
{
    function indexAction()
    {
        $artist = $this->model('artist');
        $this->view('artist', [
            'basehref' => getBaseURL() . '/album',
            'title' => 'Albums | Spotify',
            'artist' => $artist->findOne('*', ['artistName' => getID()])
        ]);
    }
}
