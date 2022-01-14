<?php

class Laptop
{
    public $id;
    public $model;
    public $procesor;
    public $ram;
    public $hdd;
    public $cena;
    public $proizvodjac_id;

    public function sacuvaj($id, $model, $procesor, $ram, $hdd, $cena, $proizvodjac_id)
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $db = "laptopovi";
        $connection = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n" . $connection->error);

        $query = "insert into laptop values (null, '$model', '$procesor', '$ram', '$hdd', '$cena', '$proizvodjac_id')";

        return $connection->query($query);
    }
}
