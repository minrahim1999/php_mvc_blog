<?php

class Welcome extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = [];
        $this->view('Welcome/index', $data);
    }
}
?>