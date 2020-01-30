<?php
class Division_model extends CI_Model
{
public function insert_division_values($divion_value)
{
$this->div_one  = $_POST['div_one'];
$this->div_two  = $_POST['div_two'];
$this->divion_value = $divion_value;
$this->status=5;
$this->db->insert('entries',$this);


}
public function get_division_values()
{
$this->db->select('div_one_one,div_two');
$this->db->from('entries');
$this->db->where('status=5');
$query=$this->db->get();
return $query->result();

}
}