<?php

include 'class.config.php';

class Customer extends config
{
    public $datereg;
    public function add_customer($Name, $DoB, $Addr)
    {
        $sql = 'insert into Customer(FullName,DOB,Address) values(?,?,?)';
        $query = $this->connectdb()->prepare($sql);
        $query->execute([$Name, $DoB, $Addr]);
        $Customer = $query->fetchAll();
    }
}
