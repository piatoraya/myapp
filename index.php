<?php





define("APPPATH", __DIR__);





require APPPATH . "/config/App.php";
require APPPATH . "/config/Database.php";
require APPPATH . "/core/Sistem.php";
require APPPATH . "/core/SistemModel.php";
session_start();
extracUrl();

function extracUrl()
{
    // mendapatkan url yang diaksess oleh client secara otomatis
    $aksesUrl = $_SERVER['REQUEST_URI'];
    // var_dump($aksesUrl);

    $urlBase = App::baseUrl();
    // var_dump($urlBase);

    $domain = str_replace("http://localhost", "", $urlBase);
    // var_dump($domain);

    $url = str_replace ($domain, "", $aksesUrl);
    // var_dump($url);


    $data = explode("/", $url, 3);
    // var_dump($data);
    $file       = $data[0];
    $function   = @$data[1];
    $param      = @$data[2];

    if (!$file || $file == 'login' || $file == 'index') {
        include_once "controllers/login.php";
        $a = new Login();
        if (!$function) $function = 'index';
        $a-> $function ($param);
        die;
        
    } else{
        if (file_exists("controllers/" . $file . ".php")) {
            include_once "controllers/" . $file . ".php";
            $a = new $file();
            if (!$function) $function = "index";
            $a ->$function($param);
            die;
        } else {
            show_error404();
        }
    }

}


function show_error404()
{
    $heading = "404 Page Not Found";
    $message = "The Page you requested was not found. <br><p> </p>";
    include APPPATH . "/views/error_404.php";
    die;
}