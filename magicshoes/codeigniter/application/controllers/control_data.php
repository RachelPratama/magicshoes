<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Control_data extends CI_Controller {
    public function index()
        {
        $this->load->model('model_data');
            $data['data_dosenn'] = $this->model_data->get_data();
            $this->load->view('view_data', $data) ;
        }

        function tambah(){
            $this->load->view('tambah_dosen');
        }

        function insert(){
            $data = array(
                "nidn" => $this->input->post('nidn'),
                "nama" => $this->input->post('nama'),
                "bidang_ilmu" => $this->input->post('bidang_ilmu'),
                "alamat" => $this->input->post('alamat'),
            );
            $this->load->model('model_data');
            $this->model_data->insertdosenn($data);
            $this->index();
        }

        function edit($nidn){
            $this->load->model('model_data');
            $data['data_edit'] = $this->model_data->get_data_by_id('dosenn', $nidn)->row();
            $this->load->view('edit_dosen', $data);
        }

        function update(){
            $data = array(
                "nidn" => $this->input->post('nidn'),
                "nama" => $this->input->post('nama'),
                "bidang_ilmu" => $this->input->post('bidang_ilmu'),
                "alamat" => $this->input->post('alamat'),
            );
            $this->load->model('model_data');
            $this->model_data->update('dosenn', $this->input->post('nidn'), $data);
            $this->index();
        }

        function hapus($nidn){
            $this->load->model('model_data');
            $data['data_edit'] = $this->model_data->del_by_id('dosenn', $nidn);
            $this->index();
        }
    }
?>
