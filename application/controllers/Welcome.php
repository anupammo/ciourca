<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('header');
		$this->load->view('invoice_page');
		$this->load->view('footer');
		// $this->load->model('Inv_item');
	}
	public function invoice_form()
	{
		// $this->load->database();
		$this->form_validation->set_rules('idesc', 'Item Description', 'required');
		$this->form_validation->set_rules('irate', 'Item Rate', 'required');
		$this->form_validation->set_rules('iqty', 'Item Quantity', 'required');
		$this->form_validation->set_rules('idtls', 'Item Details', 'required');
		if ($this->form_validation->run()) {
			$this->load->model('Inv_item');
			if ($this->input->post('additems')) {
				$data['inv_idesc'] = $this->input->post('idesc');
				$data['inv_irate'] = $this->input->post('irate');
				$data['inv_iqty'] = $this->input->post('iqty');
				$data['inv_idtls'] = $this->input->post('idtls');
				$user = $this->Inv_item->invitem($data);
				if ($user > 0) {
					echo "Done";
				} else {
					echo "Sorry";
				}
			} else {
				echo "DB Error";
			}
		} else {
			echo "Validation Error";
		}
	}
}
