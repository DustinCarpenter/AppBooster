<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['view_file'] = 'home';
		$this->load->view('layout', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */