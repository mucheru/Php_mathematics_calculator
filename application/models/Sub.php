<?php
class Sub extends CI_Model{

	public function insert_subtraction_value(){
		$data=array(
					'subtraction_one'=>$this->input->post('subtraction_one'),
					'subtraction_two'=>$this->input->post('subtraction_two'),
					'status'=>2

				);

		$this->db->insert('entries',$data);

	}
}








