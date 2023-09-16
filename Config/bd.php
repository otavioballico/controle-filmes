<?php

class db
{

    public function conectar()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = 'controle-filmes';
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
}
