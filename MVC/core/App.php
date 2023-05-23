<?php
class App
{
    protected $controller = 'home';
    protected $action = 'indexAction';
    // Mảng để chứa các biến đường dẫn truyền vào
    protected $params = [];

    protected $arr;
    function __construct()
    {

        $this->arr = $this->URLProcess();
        if (file_exists('./MVC/controllers/' . $this->arr[0] . '_Controller.php')) {
            $this->controller = $this->arr[0];
            unset($this->arr[0]);
        }
        $this->controller = $this->controller . '_Controller';
        require_once './MVC/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        // Action 
        if (isset($this->arr[1])) {
            if (method_exists($this->controller, $this->arr[1])) {
                $this->action = $this->arr[1];
            }
            unset($this->arr[1]);
        }
        // Params để chứa những đường dẫn 
        $this->params = $this->arr ? array_values($this->arr) : [];

        // Gọi callback hàm với các tham số được truyền vào nằm trong mảng 
        call_user_func_array([$this->controller, $this->action], $this->params);
    }


    function URLProcess()
    {
        if (!isset($_GET['URL'])) {
            $_GET['URL'] = 'home/indexAction';
        }
        if (isset($_GET['URL'])) {
            // Tách home/defaultView thành mảng [0] => home, [1] => defaultView
            return explode('/', filter_var(trim($_GET['URL'], '/')));
        }
    }
}
