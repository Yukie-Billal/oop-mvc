<?php 

class Auth 
{
    public function __construct()
    {
        $_SESSION['logged'] = false;
    }

    public static function get()
    {
        return $_SESSION;
    }
    public static function set($data)
    {
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }
    public static function check()
    {
        if ($_SESSION['logged']) {
            return true;
        }
        return false;
    }
    public function attempt($data)
    {
        $_SESSION['logged'] = true;
    }
}
$auth = new Auth;