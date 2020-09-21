<?php

class Fruit
{
    function getFruits()
    {
        $conn = new Database();
        $conn->query("SELECT * FROM fruits");
        return $conn->resultSet();
    }
}