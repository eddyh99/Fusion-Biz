<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penarikan extends CI_Controller
{

    public function index()
    {
        $data = array(
            "title"     => NAMETITLE . " - Penarikan",
            "content"   => "main/penarikan",
            "mn_penarikan"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }


}


