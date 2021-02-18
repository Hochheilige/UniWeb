<?php

class Controller{
    
    protected $view;
    protected $nameModel;
    
    public function __construct() {
        $this->view = new View;
        $this->nameModel = $this->getBaseNameByController().'Model';
        if(file_exists(DIR_PATH_APP."/models/{$this->nameModel}.php")) {
            require_once DIR_PATH_APP."/models/{$this->nameModel}".'.php';
            $this->model = new $this->nameModel;
        }
    }
    
    public function index(){
        $this->view->render(strtolower(get_class($this)));
    }

    protected function getBaseNameByController() {
        $name = get_class($this);
        $firstIndex = strpos($name, 'Controller');
        return substr($name, 0, $firstIndex);
    }

    // protected function getBaseNameByModel() {
    //     $name = get_class($this);
    //     $firstIndex = strpos($name, 'Model');
    //     return substr($name, 0, $firstIndex);
    // }
}
