<?php
Class Galerie extends Controller
{
    function index()
    {
        $data['page_title'] = "Galerie";
        $this->view("deffay/galerie", $data);
    }
}
