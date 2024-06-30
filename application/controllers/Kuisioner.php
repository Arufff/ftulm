<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisioner extends CI_Controller {

	public function index()
	{
        $data = $this->GM->getDataUser($this->session->userdata['nim']);
        $data = [
            'id_user'       => $data->id_user,
            'nim'  		    => $data->nim,
            'nama'  	    => $data->nama,
            'prodi'  	    => $data->prodi,
            'nohp'  	    => $data->nohp,
        ];

		$this->load->view('kuisioner', $data);
	}

    public function create()
    {
      $data = [
          'semester'        => $this->input->post('semester', true),
          'thnakademik'     => $this->input->post('thnakademik', true),
          'domisili'        => $this->input->post('domisili', true),
      ];

      $this->GM->addData('tbl_biodata', $data);
      redirect('kuisioner/visi');
    }

	public function visi()
	{
		$this->load->view('visi');
	}

    public function addvisi()
    {
        $data = [
            'visimisi1'   => $this->input->post('visimisi1', true),
            'visimisi2'   => implode(', ', $this->input->post('visimisi2', true)),
            'visimisi3'   => $this->input->post('visimisi3', true),
            'visimisi4'   => $this->input->post('visimisi4', true),
            'visimisi5'   => $this->input->post('visimisi5', true),
            'visimisi6'   => implode(', ', $this->input->post('visimisi6', true)),
        ];

      $this->GM->addData('tbl_visimisi', $data);
      redirect('kuisioner/akademik');
    }

	public function akademik()
	{
		$this->load->view('akademik');
	}

    public function addakademik()
    {
        $data = [
            'keandalan1'   => $this->input->post('keandalan1', true),
            'keandalan2'   => $this->input->post('keandalan2', true),
            'keandalan3'   => $this->input->post('keandalan3', true),
            'keandalan4'   => $this->input->post('keandalan4', true),
            'keandalan5'   => $this->input->post('keandalan5', true),
            'keandalan6'   => $this->input->post('keandalan6', true),
            'keandalan7'   => $this->input->post('keandalan7', true),
            'dayatanggap1'   => $this->input->post('dayatanggap1', true),
            'dayatanggap2'   => $this->input->post('dayatanggap2', true),
            'dayatanggap3'   => $this->input->post('dayatanggap3', true),
            'dayatanggap4'   => $this->input->post('dayatanggap4', true),
            'kepastian1'   => $this->input->post('kepastian1', true),
            'kepastian2'   => $this->input->post('kepastian2', true),
            'kepastian3'   => $this->input->post('kepastian3', true),
            'kepastian4'   => $this->input->post('kepastian4', true),
            'kepastian5'   => $this->input->post('kepastian5', true),
            'empati1'   => $this->input->post('empati1', true),
            'empati2'   => $this->input->post('empati2', true),
            'empati3'   => $this->input->post('empati3', true),
            'empati4'   => $this->input->post('empati4', true),
            'tangible1'   => $this->input->post('tangible1', true),
            'tangible2'   => $this->input->post('tangible2', true),
            'tangible3'   => $this->input->post('tangible3', true),
            'tangible4'   => $this->input->post('tangible4', true),
            'tangible5'   => $this->input->post('tangible5', true),
            'tangible6'   => $this->input->post('tangible6', true),
        ];

      $this->GM->addData('tbl_akademik', $data);
      redirect('kuisioner/kemahasiswaan');
    }

	public function kemahasiswaan()
	{
		$this->load->view('kemahasiswaan');
	}

    public function addkemhsan()
    {
        $data = [
            'kemahasiswaan1'   => $this->input->post('kemahasiswaan1', true),
            'kemahasiswaan2'   => $this->input->post('kemahasiswaan2', true),
            'kemahasiswaan3'   => $this->input->post('kemahasiswaan3', true),
        ];

      $this->GM->addData('tbl_kemhsan', $data);
      redirect('kuisioner/selesai');
    }

	public function selesai()
	{
		$this->load->view('selesai');
	}

}
