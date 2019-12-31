<?php 
class Subtraction extends CI_Controller{
	function __construct(){
				 	parent::__construct();
				 	$this->load->helper('url_helper');
	   }
		public function index(){
			$this->load->helper(array('form', 'url'));
			$this->load->view('subtraction');
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('subtraction_one', 'Subtraction_one','required|numeric');
			$this->form_validation->set_rules('subtraction_two', 'Subtraction_two','required|numeric');
			if($this->form_validation->run()==FALSE){
				echo validation_errors();
			}
			else{
				$subtraction_one=$this->input->post('subtraction_one');
				$subtraction_two=$this->input->post('subtraction_two');
				$subraction_results=$subtraction_one-$subtraction_two;
				echo($subraction_results);
				$this->load->model('sub');
				$this->sub->insert_subtraction_value();			

}


}


}
?>