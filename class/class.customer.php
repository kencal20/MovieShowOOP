<?php

    include 'class.config.php';

    class Customer extends config
{
     public function add_customer( $Name,$DoB,$Addr)
    {
        $sql='insert into Customer(FullName,DOB,Address) values(?,?,?)';
        $query =$this->connectdb()->prepare($sql);
    }
}

?>