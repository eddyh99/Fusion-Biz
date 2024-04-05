<?php
defined('BASEPATH') or exit('No direct script access allowed');

class team extends CI_Controller
{

    public function index()
    {
        $data = array(
            "title"     => NAMETITLE . " - team",
            "content"   => "main/team",
            "mn_team"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }

	public function tambahteam()
    {
        $data = array(
            "title"     => NAMETITLE . " - Tambah team",
            "content"   => "main/tambahteam",
            "mn_team"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }

}

