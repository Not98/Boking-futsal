<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
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
        //sebaris menggunakan row array
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        //menampilkan pesan erroe apa bila kosong
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        //menambahkan  form validation di autolad
        if ($this->form_validation->run() == false) {
            //load file
            $data['titel'] = 'Menu Management';
            $this->load->view('templet/header', $data);
            $this->load->view('templet/sidebar', $data);
            $this->load->view('templet/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templet/footer', $data);
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sacces Add Menu</div>');
            redirect('menu');
        }
    }
    public function submenu()
    {

        //pemanggilan sessen pada login
        $data['user'] = $this->db->get_where('user', ['email' =>
        //sebaris menggunakan row array
        $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubmenu();
        $data['sub'] = $this->db->get('sub_menu')->result_array();
        //menampilkan pesan erroe apa bila kosong
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        //menambahkan  form validation di autolad
        if ($this->form_validation->run() == false) {
            //load file
            $data['titel'] = 'Submenu Management';
            $this->load->view('templet/header', $data);
            $this->load->view('templet/sidebar', $data);
            $this->load->view('templet/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templet/footer', $data);
        } else {
            $this->db->insert('user_sub_menu', [
                'menu' => $this->input->post('menu')
            ]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sacces Add Menu</div>');
            redirect('menu/submenu');
        }
    }
}