<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{

    public function index()
    {
		$this->load->view('login');
    }

	public function auth()
    {
        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $nim        = $this->input->post('nim');
            $password   = $this->input->post('password');
            $check      = $this->GM->check($nim, $password);

            if ($check->num_rows() > 0){
                foreach ($check->result() as $cek) {
                    $sess_data['nim'] = $cek->nim;
                    $sess_data['password'] = $cek->password;
                    $sess_data['prodi'] = $cek->prodi;

                    $this->session->set_userdata($sess_data);
                }
                if ($sess_data['prodi'] == 'Teknologi Informasi'){
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Maaf, password Anda salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button></div>');
                    redirect('welcome');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Maaf, password Anda salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>');
                redirect('welcome');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome/login');
    }

}