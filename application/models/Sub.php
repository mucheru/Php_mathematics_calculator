<?php
class Sub extends CI_Model{

	public function insert_subtraction_value()
	{
		$data=array(
					'subtraction_one'=>$this->input->post('subtraction_one'),
					'subtraction_two'=>$this->input->post('subtraction_two'),
					'status'=>2

				);

		$this->db->insert('entries',$data);

	}
	public function retrieve_sub_values()
	{

		$this->db->select('subtraction_one,subtraction_two');
		$this->db->from('entries');
		$this->db->where('status=2');
		$query=$this->db->get();
		return $query->result();
	}



}








