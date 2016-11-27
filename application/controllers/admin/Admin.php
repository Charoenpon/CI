<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 27/11/2559
 * Time: 11:04
 */
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/admin_view');
    }
}