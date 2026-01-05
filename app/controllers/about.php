<?php
Class About extends Controller
{
    function index()
    {
        $data['page_title'] = "A propos";
        $this->view("deffay/about", $data);
    }

}
