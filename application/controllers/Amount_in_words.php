<?php
class Amount_in_words extends CI_Controller{
	function __construct() {
        parent::__construct();
        $this->load->helper('amount_in_words');
        
    }
    public function wordings(){
    	$number=1000000000;
    	$result=convertNumber($number);
    	echo $result.'-'.$number;    	

    	
    }
}

?>