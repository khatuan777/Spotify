<?php


class search_Controller extends Controller
{
    function indexAction()
    {
        // Model 
        $category = $this->model('category');
        $playlist = $this->model('playlist');
        $user = $this->model('user');
        $this->view('search', [
            'basehref' => getBaseURL() . '/search',
            'title' => 'Spotify - Search',
            'category' => $category->find(),
            'playlist' => $playlist->find('*', ['userID' => getSession()]),
            'user' => $user->findOne('*', ['userID' => getSession()])
        ]);
    }
}
