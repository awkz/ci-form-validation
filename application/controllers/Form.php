<?php
/**
* 
*/
class Form extends CI_Controller
{

	function index()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('phone', 'Nomor Ponsel', 'trim|required|numeric|max_length[13]');
		$this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form');
		}
		else
		{
			$this->load->view('formsukses');
		}
	}
}