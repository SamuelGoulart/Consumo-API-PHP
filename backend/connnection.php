<?php
    $servername = "localhost";
    $username = "root";
    $password = "abc45101922072";
    $db = 'aulafront';
    

    $conn = new mysqli($servername, $username, $password, $db);
    $conn->set_charset('utf8');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;