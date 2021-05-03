<?php

class Order extends Db{

    public function _construct()
    {
        $this->table="orders";
        $this->connect();
    }
}