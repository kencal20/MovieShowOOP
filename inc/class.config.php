<?php

class config
{
    private $host ='localhost';
    private $uname='root';
    private $pass='';
    private $dbname='ticketing_db';

protected function connectdb()
{
//specify data source
$dsn ='mysql:host='.$this->host.';dbname='.$this->dbname;
$pdo = new PDO($dsn,$this->uname.$this->pass);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
return $pdo;
}

}
