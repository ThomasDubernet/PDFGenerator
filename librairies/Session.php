<?php

class Session {

    public static function start(){
        if(empty(session_id())){
            session_start();
        }
        elseif(!empty(session_id())){
            session_start();
        }
    }

    public static function startWithID(array $user){
        session_id();
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
    }

    public static function destroy(){
        session_unset();
        session_destroy();
    }
}