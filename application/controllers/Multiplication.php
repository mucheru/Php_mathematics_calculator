<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Multiplication extends CI_Controller
	{
		function __construct()
		{
				 	parent::__construct();
				 	$this->load->helper('url_helper');
	   }

		public function index(){
		$this->load->helper(array('form', 'url'));
		$this->load->model('multiply');

		//$this->load->view('multiplication');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('digit_one', 'Digit_one','required|numeric');
		$this->form_validation->set_rules('digit_two', 'Digit_two','required|numeric');
		if($this->form_validation->run()==FALSE){

		$this->load->view('multiplication');
		

		}
		else
		{

		   	$data=array(
			'digit_one'=>$this->input->post('digit_one'),
			'digit_two'=>$this->input->post('digit_two'),
			'multiplication_results'=>$this->input->post('digit_one')*$this->input->post('digit_two'),
			'status'=>1

			
		); 
		   	//$multiplication_results =$data['digit_one']*$data['digit_two'];
		   	$this->multiply->insert_multiplication_values($data);
		   	$data['message'] = 'Data Inserted Successfully';
			echo $data['multiplication_results'];
			redirect('multiplication/show_multiplication_values');

	
}

}

public function show_multiplication_values()
{
	$this->load->model('multiply');
	$results['data']=$this->multiply->retrieve_multiplication_values();
	$this->load->view('display',$results);
}

}
?>