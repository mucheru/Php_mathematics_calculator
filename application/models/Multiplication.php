<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Multiplication extends CI_Model {
	//function __construct() 
	   {
     // parent::__construct();
        //$this->load->database();
   // }


 function insert_multiplication_values($data){
    $data=array(
	'digit_one'=>$this->input->post('digit_one')
	'digit_two'=>$this->input->post('digit_two'));

	$this->db->insert('entries',$data);


}

}
?>