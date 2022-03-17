<?php

class Countries extends Controller
{

    protected object $countriesObj;

    public function __construct()
    {
        $this->model('country');
        $this->countriesObj = new Country();
    }

    public function index()
    {
        $data = [
            'title' => 'Counties',
            'countries' => $this->countriesObj->getCountriesFormatted()
        ];

        $this->view('countries/index', $data);
    }
}