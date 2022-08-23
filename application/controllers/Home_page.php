<?php
class Home_page extends CI_Controller
{

    public function index()
    {
        $this->load->view('home_page');
    }
    public function kamar()
    {
        $this->load->view('home/kamar');
    }
    public function informasi()
    {
        $this->load->view('home/informasi');
    }
}