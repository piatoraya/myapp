<?php

class Sistem
{
    function __construct()
    {
    }

    protected function validationLogin()
    {
        // session_start();
        $user = @$_SESSION['user'];
        if (!$user) App::redirect('Login');
    }

    protected function view($file, $data = [])
    {
        //mengubah index array $data menjadi variable global 
        //sehingga dapat langsung dipanggil melalui view
        foreach ($data as $i => $val) {
            global $$i;
            $$i = $val;
        }

        include "views/$file.php";
    }

    /**
     *  mengembalikan nilai request type POST
     */
    protected function post($param = null)
    {
        if (!$param) return $_POST;
        return @$_POST[$param];
    }

    /**
     *  mengembalikan nilai request type GET
     */
    protected function get($param = null)
    {

        if (!$param) return $_GET;
        return @$_GET[$param];
    }

    /**
     *  meload file model
     */
    protected function loadModel($file)
    {
        include_once "models/$file" . ".php";
    }
}
