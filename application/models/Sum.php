<?php 
class Sum extends CI_Model {
	function __construct()
    {
      parent::__construct();
        //$this->load->database();
    }

	function insert_sum_values($data){
		$results = $this->input->post('num_1')+$this->input->post('num_2');
		$data=array(
         'num_1'=>$this->input->post('num_1'),
         'num_2'=>$this->input->post('num_2'),
         'results'=>$results

		);

		$this->db->insert('entries', $data);

	}
	


}