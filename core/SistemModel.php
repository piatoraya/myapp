<?php


class SistemModel
{
    public $db;


    function __construct()
    {
        $configDB   = Database::$default;
        $host       = $configDB['host'];
        $username   = $configDB['username'];
        $password   = $configDB['password'];
        $database   = $configDB['database'];
        $port       = $configDB['port'];
        $this->db = new mysqli($host, $username, $password, $database, $port);
    }
}
