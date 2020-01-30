<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
			 	parent::__construct();
			 	//$this->load->database();
			 	$this->load->model('sum');
			 	$this->load->helper('url_helper');


   }

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
     

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function sum()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('num_1', 'Num_1','required');
		$this->form_validation->set_rules('num_2', 'Num_2','required');
		$this->form_validation->set_rules('num_1', 'Num_1','numeric');
		$this->form_validation->set_rules('num_2', 'Num_2','numeric');
		if($this->form_validation->run()==False)
		{
			$this->load->view('sum');
		}
	   else
			{
			$data=array($results = $this->input->post('num_1')+$this->input->post('num_2'));
			 echo ('sum='.$results);
			 $this->load->view('sum',$data);
			 //redirect('welcome/show_sum_values');
			 $this->sum->insert_sum_values($data);
			 	//$this->load->model('sum');
		 		//$this->load->view('results');
         }

         
     }	
public function show_sum_values()
{ 
	$this->load->model('Sum');
	$display['data']=$this->Sum->retrieve_sum_values();
	$this->load->view('display_addition',$display);
} 
}
