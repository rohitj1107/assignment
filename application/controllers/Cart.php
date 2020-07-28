<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->model('Home_model');
		$data = $this->Home_model->select();

		if ($this->input->post('submit')) {
				$data1 = [
					'po_id' => $this->input->post('c_id'),
					'o_name' => $this->input->post('c_name'),
					'o_size' => $this->input->post('c_size'),
					'o_price' => $this->input->post('c_price')
				];
				$this->Home_model->insert($data1);
				$this->session->set_flashdata('message','myModal');
				return redirect();
		}
		$this->load->view('welcome_message',['data'=>$data]);

	}
}
