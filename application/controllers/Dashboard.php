<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $data = $this->GM->getDataUser($this->session->userdata['nim']);
        $data = [
            'id_user'   => $data->id_user,
            'nim'  		=> $data->nim,
            'nama'  	=> $data->nama,
        ];

		$this->load->view('dashboard', $data);
	}

}
