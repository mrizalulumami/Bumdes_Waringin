<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halamanutama extends CI_Controller
{
    
    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['art_selamat'] = $this->db->get('artikel_selamatdatang')->result_array();
        $data['art_prof'] = $this->db->get('artikel_profile')->result_array();
        $data['servis'] = $this->db->get('service')->result_array();


        $this->load->view('templates/headerhalamanutama', $data);
        $this->load->view('templates/topbarkiri', $data);
        if(!$this->session->userdata('email')){
            $this->load->view('templates/topbarkanan1', $data);
        }else{
            $this->load->view('templates/topbarkanan2', $data);
        }
        $this->load->view('halamanutama/index', $data);
        $this->load->view('templates/footerhalamanutama');
    }
}