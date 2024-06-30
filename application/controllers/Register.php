<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

    public function index()
    {
      $data = [
          'nim'       => set_value('nim'),
          'nama'      => set_value('nama'),
          'prodi'     => set_value('prodi'),
          'nohp'      => set_value('nohp'),
          'password'  => set_value('password'),
      ];

		  $this->load->view('register', $data);
    }

    public function create()
    {
      $data = [
          'nim'       => $this->input->post('nim', true),
          'nama'      => $this->input->post('nama', true),
          'prodi'     => $this->input->post('prodi', true),
          'nohp'      => $this->input->post('nohp', true),
          'password'  => $this->input->post('password', true),
      ];

      $this->GM->addData('tbl_user', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Akun berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button></div>');
      redirect('welcome');
    }

}