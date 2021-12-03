<?php

namespace App;

class Connect1
{
protected string $hostname = 'localhost';
protected string $username = 'root';
protected string $password = 'root';
protected string $database = 'ticketcheck';
protected $connect;

public function getConnect()
{
    $connect = mysqli_connect($this->hostname,$this->username,$this->password,$this->database);
    $this->connect = $connect;
    return $connect;
    $this->isConnected();
}
public function isConnected()
{
    if (!$this->connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($this->connect);

}
}