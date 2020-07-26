<?php

class Renderer {
    public static function render(string $path, array $variables = []) {

        extract($variables);
        \Session::start();
        if(isset($connect)){
            \Session::startWithID($user);
        }
        if(isset($destroy)){
            \Session::destroy();
        }
        ob_start();
        require('templates/' . $path . '.html.php');
        $pageContent = ob_get_clean();
    
        require('templates/layout.html.php');
    }
}