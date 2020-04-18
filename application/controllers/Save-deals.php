<?php

class Savedeals extends CI_Controller{

public function Savedeals(){
   $this->load->view('view-deals')

   ob_start(); //I like output-buffering because if we need to change headers mid script nothing dies

$DealData = isset( $_POST['dealData'] )?$_POST['dealData']:die("Malformed form data!");

if($DealData!='') {
   $DB = new mysqli("localhost", "root", "password", "practice_project");
   if ($DB->connect_errno) {
      echo "Failed to connect to MySQL: " . $DB->connect_error;
   }

   $DealData = $DB->real_escape_string($DealData); //Sanitize it for MySQL

   if (!$DB->query("INSERT INTO deals(data) VALUES ($DealData)") {
      echo "Insert failed: (" . $DB->errno . ") " . $DB->error;
   } else {
      //AT THIS POINT IT SHOULD HAVE BEEN INSERTED!
      //You could return a success string, or whatever you want now.
   }
} else {
   http_response_code("400");
   die("Bad Request, please check your entry and try again");
}
ob_end_flush(); //Close up the output-buffer
}




}