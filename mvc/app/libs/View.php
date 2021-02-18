<?php

class View{

    private $title = 'Empty title';

    public function render( $path, $file_name = 'index', $add_files = true){
        if (file_exists(__DIR__.'/../views/'.$path.'/'.$file_name.'.php')){
            if ($add_files) {
                if (file_exists(__DIR__.'/../views/'.$path.'/styles.css')) {
                    $this->addCss = TEMPLATE_PATH.'/'.$path.'/styles.css';
                }
                if (file_exists(__DIR__.'/../views/'.$path.'/script.js')) {
                    $this->addJs = TEMPLATE_PATH.'/'.$path.'/script.js';
                }
            }

            require __DIR__.'/../views/'.$path.'/'.$file_name.'.php';

        } else {
            App::ShowError("Template by $path does not exists");
        }
    }

    public function GetTitle()
    {
        return $this->title;
    }

    public function SetTitle($title) {
        $this->title = $title;
    }
}

