<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/11/2559
 * Time: 13:22
 */
class Home extends CI_Controller
{
    public function index(){
        $this->load->view('home_view');
    }
}