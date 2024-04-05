<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    public function index()
    {
        $data = array(
            "title"     => NAMETITLE . " - Dashboard",
            "content"   => "main/dashboard",
            "mn_dashboard"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }


}

