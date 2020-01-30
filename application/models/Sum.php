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
         'results'=>$results,
         'status'=>3

		);

		$this->db->insert('entries', $data);

	}
	
function retrieve_sum_values(){

	$this->db->select("num_1,num_2,results");
	$this->db->from("entries");
	$this->db->where('status=3');
	$query=$this->db->get();
	return $query->result();

}

}