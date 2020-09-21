<?php

class Fruits extends Controller
{
    protected object $fruitObj;

    public function __construct()
    {
        $this->model('fruit');
        $this->fruitObj = new Fruit();
    }

    public function index()
    {
        $data = [
            'title' => 'Fruits',
            'fruits' => $this->fruitObj->getFruits()
        ];

        $this->view('fruits/index', $data);
    }


}