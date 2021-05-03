<?php


class Product extends Db
{

    public function _construct()
    {
        $this->table ="products";
        $this->connect();


    }


}