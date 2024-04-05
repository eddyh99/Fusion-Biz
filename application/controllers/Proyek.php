<?php
defined('BASEPATH') or exit('No direct script access allowed');

class proyek extends CI_Controller
{

    public function index()
    {
        $data = array(
            "title"     => NAMETITLE . " - proyek",
            "content"   => "main/proyek",
            "mn_proyek"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }

	public function tambahproyek()
    {
        $data = array(
            "title"     => NAMETITLE . " - Tambah Proyek",
            "content"   => "main/tambahproyek",
            "mn_proyek"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }

}

