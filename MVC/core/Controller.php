<?php
require_once './MVC/core/utils/Basehref.php';
require_once './MVC/core/utils/getSession.php';
require_once './MVC/core/utils/getID.php';
require_once './MVC/core/utils/getAllModel.php';

class Controller
{

    public function model($model)
    {
        $model = ucfirst($model);
        require_once "./MVC/models/" . $model . '.php';
        return new $model;
    }

    public function view($view, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        require_once './MVC/views/' . $view . '/' . $view . '.php';
    }
}
