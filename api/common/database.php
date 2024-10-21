<?php
    function getConnection()
    {
        $host = 'localhost';
        $db_name = 'ender';
        $username = 'root';
        $password = '';
        $DATABASE = 'mysql:host='.$host.';dbname='.$db_name.'';
        $conn = new PDO($DATABASE, $username,$password);
        // $conn= new mysqli($host, $username, $password, $db_name);
        /* if ($conn->connect_error) {
            $conn= null;
        } */
        return $conn;
    }
