<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function role()
    {
        $data['title'] = 'Pengelola Akses User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Pengelola Akses User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses berhasil diganti!</div>');
    }
    public function dataPeminjam()
    {
        $data['title'] = 'Data Peminjam modal';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['dat_peminjam'] = $this->db->get('data_peminjam')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datapeminjam', $data);
        $this->load->view('templates/footer');
    }
    public function editDataPeminjam()
    {
        $data['title'] = 'Edit Data Peminjam';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_peminjam'] = $this->db->get_where('data_peminjam', ['id_peminjam' =>
        $this->session->userdata('id_peminjam')])->row_array();


        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required|trim');
        $this->form_validation->set_rules('ttl', 'Tggl Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('total', 'Total', 'required|trim');
        $this->form_validation->set_rules('ket', 'Ket', 'required|trim');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editdatapeminjam', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $nik = $this->input->post('nik');
            $tempat = $this->input->post('tempat');
            $tggllahir = $this->input->post('ttl');
            $alamat = $this->input->post('alamat');
            $total = $this->input->post('total');
            $ket = $this->input->post('ket');

            $upload_image1 = $_FILES['foto']['name'];

            if ($upload_image1) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/img/peminjam';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $new_image1 = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image1);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_image2 = $_FILES['foto_kk']['name'];

            if ($upload_image2) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/img/peminjam';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_kk')) {
                    $new_image2 = $this->upload->data('file_name');
                    $this->db->set('foto_kk', $new_image2);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->set('tempat', $tempat);
            $this->db->set('ttl', $tggllahir);
            $this->db->set('alamat', $alamat);
            $this->db->set('total', $total);
            $this->db->set('ket', $ket);
            $this->db->where('nik', $nik);
            $this->db->update('data_peminjam');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('admin/datapeminjam');
        }
    }
    public function tambahData()
    {
        $data['title'] = 'Isi Form Peminjam Modal Baru';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_peminjam'] = $this->db->get_where('data_peminjam', ['id_peminjam' =>
        $this->session->userdata('id_peminjam')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required|trim');
        $this->form_validation->set_rules('tggllahir', 'Tggl Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('total', 'Total', 'required|trim');
        $this->form_validation->set_rules('ket', 'Ket', 'required|trim');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahdata', $data);
            $this->load->view('templates/footer');
        }else{
            $nama = $_POST['nama'];
            $nik = $_POST['nik'];
            $tempat = $_POST['tempat'];
            $tggllahir = $_POST['tggllahir'];
            $alamat = $_POST['alamat'];
            $total = $_POST['total'];
            $ket = $_POST['ket'];

            //Kode program unruk upload foto peminjam
            $upload_image1 = $_FILES['foto']['name'];

            if ($upload_image1) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/img/peminjam';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $new_image1 = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image1);
                } else {
                    echo $this->upload->display_errors();
                }
            }
             //Kode program unruk upload foto KK peminjam
            $upload_image2 = $_FILES['foto_kk']['name'];

            if ($upload_image2) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/img/peminjam';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_kk')) {
                    $new_image2 = $this->upload->data('file_name');
                    $this->db->set('foto_kk', $new_image2);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $data = array(
                'nama' => $nama,
                'nik' => $nik,
                'tempat' => $tempat,
                'ttl' => $tggllahir,
                'alamat' => $alamat,
                'total' => $total,
                'ket' => $ket
            );

            $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
            if ($tambah > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
                redirect('admin/datapeminjam');
            } else {
                echo 'gagal menambahkan';
            }
           

        }
    }
    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['title'] = 'Data Peminjam Modal';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['dat_peminjam'] = $this->db->get('data_peminjam')->result_array();

        $this->load->view('laporan_pdf',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html        = $this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_peminjam.pdf",array('Attachment' =>0));
    }
    public function delete($id)
    {
        $hapus = $this->Menu_model->hapusData('data_peminjam', $id);
        if ($hapus > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('admin/datapeminjam');
        } else {
            echo 'Gagal menghapus !';
        }
    }
    public function print()
    {
        $data['title'] = 'Data Peminjam';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['dat_peminjam'] = $this->db->get("data_peminjam")->result_array();

        $this->load->view('templates/headerlaporan', $data);
        $this->load->view('print_document', $data);
        $this->load->view('templates/footerlaporan');
        
    }
    public function printdoc()
    {
        $data['title'] = 'Data Peminjam';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['dat_peminjam'] = $this->db->get("data_peminjam")->result_array();

        $this->load->view('templates/headerlaporan', $data);
        $this->load->view('testword', $data);
        $this->load->view('templates/footerlaporan');
        
    }
    public function search()
    {
        $data['title'] = 'Data Peminjam modal';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $keyword = $this->input->post('keyword');
        $data['dat_peminjam'] = $this->Menu_model->get_keyword($keyword);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datapeminjam', $data);
        $this->load->view('templates/footer');
    }


    
}
