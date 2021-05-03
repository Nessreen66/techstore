<?php

abstract class Db
{
    protected $conn;
    protected $table;

    public function connect()
    {
        $this->conn =mysqli_connect("localhost" ,"root" ,"" ,"techstore");
    }

    public function selectAll(string $fields="*")
    {
        $sql="SELECT $fields FROM $this->table";
        $result =mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function selectId($id ,string $fields="*")
    {
        $sql="SELECT $fields FROM $this->table WHERE id=$id";
        $result =mysqli_query($this->conn,$sql);

        return mysqli_fetch_assoc($result);
    }
}