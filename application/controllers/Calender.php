<?php 
class Calender extends CI_Controller
{
 function __construct()
    {
       parent::__construct();
       $this->load->library('calendar');
       $this->load->view('calender_view');
    }
public function display_calender(){
//$date=$this->input->post('date');

//echo $this->calendar->generate($date);
	$kyc_array=array();

if (sizeof($kyc_array) > 0) {
  $kyc_array['to']=$this->input->post('to');

}


}


}




?>