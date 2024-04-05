<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profil extends CI_Controller
{

    public function index()
    {
        $data = array(
            "title"     => NAMETITLE . " - profil",
            "content"   => "main/profil/index",
            "mn_profil"    => "active",
			"mn_dpribadi"	=>"active",
        );

        $this->load->view('template/wrapper', $data);
    }

	public function akunbank()
    {
        $data = array(
            "title"     => NAMETITLE . " - Akun Bank",
            "content"   => "main/profil/akunbank",
            "mn_profil"    => "active",
			"mn_akunbank"	=>"active",
        );
        $this->load->view('template/wrapper', $data);
    }

	public function gantipass()
    {
        $data = array(
            "title"     => NAMETITLE . " - Ganti Pass",
            "content"   => "main/profil/gantipass",
            "mn_profil"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }
	
	public function notif()
    {
        $data = array(
            "title"     => NAMETITLE . " - Notifikasi",
            "content"   => "main/profil/notif",
            "mn_profil"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }
	
	public function googleauth()
    {
        $data = array(
            "title"     => NAMETITLE . " - auth",
            "content"   => "main/profil/googleauth",
            "mn_profil"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }
	
	public function pembayaran()
    {
        $data = array(
            "title"     => NAMETITLE . " - Pembayaran",
            "content"   => "main/profil/bayar",
            "mn_profil"    => "active",
        );

        $this->load->view('template/wrapper', $data);
    }
}

