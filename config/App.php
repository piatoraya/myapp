<?php



class App
{


  // membuat base url, untuk menunjukan url projec
  public static $base_url ="http://localhost/sc202311/myapp/";

  // untuk mrndapatkan url, ditambah fungsi penggabungan
  static function baseUrl($controller ="")
  {
     return self::$base_url . $controller;
  }

  // mengalihkan halamn
  static function redirect($controller ="")
  {
    header('Location: ' . self::baseUrl($controller));
    die;
  }

}