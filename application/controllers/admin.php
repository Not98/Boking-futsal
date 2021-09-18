<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        is_logged_in();
    }

    public function index()
    {


        //pemanggilan sessen pada login
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //load file
        $data['titel'] = 'Home';
        $this->load->view('templet/header', $data);
        $this->load->view('templet/sidebar', $data);
        $this->load->view('templet/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templet/footer', $data);
    }

    public function Trafik()
    {
        //pemanggilan sessen pada login
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //load file
        $data['titel'] = 'Trafik';
        $this->load->view('templet/header', $data);
        $this->load->view('templet/sidebar', $data);
        $this->load->view('templet/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templet/footer', $data);
    }
}