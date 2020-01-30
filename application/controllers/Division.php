<?php
class Division extends CI_Controller
{
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->load->view('div');

		$this->form_validation->set_rules('div_one', 'Num_1','required|numeric');
		$this->form_validation->set_rules('div_two', 'Num_2','required|numeric');
		//$this->form_validation->set_rules('num_1', 'Num_1','numeric');
		//$this->form_validation->set_rules('num_2', 'Num_2','numeric');
		if($this->form_validation->run()==FALSE)
		{
		$this->load->view('div');
		}else
		{
			//some else code

			$divion_value=$this->input->post('div_one')/$this->input->post('div_two');
			echo ($divion_value);
			$this->load->model('division_model');
			$this->division_model->insert_division_values($divion_value);


		}

 
	}
}
