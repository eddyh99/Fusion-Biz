<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan extends CI_Controller
{

    public function proyekmerchant()
    {
        $data = array(
            "title"     => NAMETITLE . " - Proyek Merchant",
            "content"   => "main/laporan/proyekmerchant",
            "mn_laporan"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }

	public function mutasi()
    {
        $data = array(
            "title"     => NAMETITLE . " - Mutasi",
            "content"   => "main/laporan/mutasi",
            "mn_laporan"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }

}

