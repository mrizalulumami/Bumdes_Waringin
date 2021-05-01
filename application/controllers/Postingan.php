<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postingan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Postingan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['art_selamat'] = $this->db->get('artikel_selamatdatang')->result_array();
        $data['art_prof'] = $this->db->get('artikel_profile')->result_array();
        $data['servis'] = $this->db->get('service')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('postingan/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Tambah Postingan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('postingan/tambah', $data);
        $this->load->view('templates/footer');
    }


    public function sambutan()
    {
        $data['title'] = 'Tmbah Postingan Sambutan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['art_sambutan'] = $this->db->get_where('artikel_selamatdatang', ['id_artsel' =>
        $this->session->userdata('id_artsel')])->row_array();

        $this->form_validation->set_rules('judul_sambutan', 'Judul Sambutan', 'required|trim');
        $this->form_validation->set_rules('isi_sambutan', 'Isi Sambutan', 'required|trim');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('postingan/sambutan', $data);
            $this->load->view('templates/footer');
        } else {
            $judul_sambutan = $_POST['judul_sambutan'];
            $isi_sambutan = $_POST['isi_sambutan'];

            //Kode program unruk upload foto peminjam
            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/img/artikel/artikel_sambutan';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = array(
                'judul_sambutan' => $judul_sambutan,
                'isi_sambutan' => $isi_sambutan,
            );

            $tambah = $this->Menu_model->tambahData('artikel_selamatdatang', $data);
            if ($tambah > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
                redirect('postingan');
            } else {
                echo 'gagal menambahkan';
            }
        }
    }
    public function profiles()
    {
        $data['title'] = 'Tambag Postingan Profiles';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['art_prof'] = $this->db->get_where('artikel_profile', ['id_artprof' =>
        $this->session->userdata('id_artprof')])->row_array();

        $this->form_validation->set_rules('judul_prof', 'Judul Profil', 'required|trim');
        $this->form_validation->set_rules('deskrips', 'Deskripsi Profil', 'required|trim');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('postingan/profiles', $data);
            $this->load->view('templates/footer');
        } else {
            $judul_prof = $_POST['judul_prof'];
            $deskrips = $_POST['deskrips'];

            //Kode program unruk upload foto peminjam
            $upload_image = $_FILES['gambar_prof']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/img/artikel/artikel_profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar_prof')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar_prof', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = array(
                'judul_prof' => $judul_prof,
                'deskrips' => $deskrips,
            );

            $tambah = $this->Menu_model->tambahData('artikel_profile', $data);
            if ($tambah > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
                redirect('postingan');
            } else {
                echo 'gagal menambahkan';
            }
        }
    }
    public function services()
    {
        $data['title'] = 'Tambah Postingan Services';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['service'] = $this->db->get_where('service', ['id_artiservis' =>
        $this->session->userdata('id_artiservis')])->row_array();

        $this->form_validation->set_rules('icon_serv', 'Icon Servis', 'required|trim');
        $this->form_validation->set_rules('judul_serv', 'Judul Servis', 'required|trim');
        $this->form_validation->set_rules('ket_serv', 'Keterangan Servis', 'required|trim');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('postingan/services', $data);
            $this->load->view('templates/footer');
        } else {
            $judul_serv = $_POST['judul_serv'];
            $ket_serv = $_POST['ket_serv'];
            $icon_serv = $_POST['icon_serv'];

            $data = array(
                'judul_serv' => $judul_serv,
                'ket_serv' => $ket_serv,
                'icon_serv' => $icon_serv,
            );

            $tambah = $this->Menu_model->tambahData('service', $data);
            if ($tambah > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
                redirect('postingan');
            } else {
                echo 'gagal menambahkan';
            }
        }
    }
    public function deletesambutan($id)
    {
        $hapus = $this->Menu_model->hapusSambutan('artikel_selamatdatang', $id);
        if ($hapus > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('postingan');
        } else {
            echo 'Gagal menghapus !';
        }
    }
    public function deleteprofiles($id)
    {
        $hapus = $this->Menu_model->hapusProfiles('artikel_profile', $id);
        if ($hapus > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('postingan');
        } else {
            echo 'Gagal menghapus !';
        }
    }
    public function deleteservice($id)
    {
        $hapus = $this->Menu_model->hapusService('service', $id);
        if ($hapus > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('postingan');
        } else {
            echo 'Gagal menghapus !';
        }
    }
}