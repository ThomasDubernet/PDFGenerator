<?php

class Renderer {
    public static function render(string $path, array $variables = []) {

        extract($variables);
        session_start();
        if(isset($connect)){
            session_id();
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
        }
        if(isset($destroy)){
            session_unset();
            session_destroy();
        }
        ob_start();
        require('templates/' . $path . '.html.php');
        $pageContent = ob_get_clean();
    
        require('templates/layout.html.php');
    }
}