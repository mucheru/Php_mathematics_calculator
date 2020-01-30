<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Multiply extends CI_Model {
function __construct() {
parent::__construct();

}
 function insert_multiplication_values($data){
    
$this->db->insert('entries',$data);
}

function retrieve_multiplication_values(){
$this->db->select("digit_one,digit_two,multiplication_results");
$this->db->from('entries');
$this->db->where('status=1');
$this->db->limit('200');

$query=$this->db->get();
return $query->result();

}
}
?>