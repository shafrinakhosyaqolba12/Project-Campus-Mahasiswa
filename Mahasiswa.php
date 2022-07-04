<?php
//defined('BASHPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function index()
	{
        $this->load->model('mahasiswa_model','mahasiswa');
        $data['mahasiswa']=$this->mahasiswa->tampilData();
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Mahasiswa/index',$data);
        $this->load->view('layout/script');
	}
}





