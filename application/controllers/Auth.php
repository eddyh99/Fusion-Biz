<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function index()
    {
        $data = array(
            "title"     => NAMETITLE . " - Login",
            "content"   => "auth/login",
        );

        $this->load->view('template/wrapper', $data);
    }


    public function login()
    {
        $data = array(
            "title"     => NAMETITLE . " - Login",
            "content"   => "auth/login",
        );

        $this->load->view('template/wrapper', $data);
    }
    
    public function login_process()
    {
        
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('passwd', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('auth/login');
		}

        $input = $this->input;
        $email = $this->security->xss_clean($input->post("email"));
        $passwd = $this->security->xss_clean($input->post("passwd"));
        echo '<pre>'.print_r($email,true).'</pre>';
        echo '<pre>'.print_r($passwd,true).'</pre>';
    }
    
    public function register()
    {
        $data = array(
            "title"     => NAMETITLE . " - Register",
            "content"   => "auth/register",
        );

        $this->load->view('template/wrapper', $data);
    }
    
    public function register_process()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('bname', 'Business Name', 'trim|required');
		$this->form_validation->set_rules('passwd', 'Password', 'trim|required');
        $this->form_validation->set_rules('passwd2', 'Confirm Password', 'trim|required|matches[passwd]');

        if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('auth/register');
		}

        $input = $this->input;
        $email = $this->security->xss_clean($input->post("email"));
        $name = $this->security->xss_clean($input->post("name"));
        $bname = $this->security->xss_clean($input->post("bname"));
        $passwd = $this->security->xss_clean($input->post("passwd"));
        $passwd2 = $this->security->xss_clean($input->post("passwd2"));
        echo '<pre>'.print_r($email,true).'</pre>';
        echo '<pre>'.print_r($bname,true).'</pre>';
        echo '<pre>'.print_r($passwd,true).'</pre>';
        echo '<pre>'.print_r($passwd2,true).'</pre>';
    }
    
}

