<?php 
class Api_data extends CI_Model
{

public function inset_api_data($decorded_data)
{

    $this->db->insert('api', $decorded_data); 


}


}

?>