<?php
class Request extends CI_Controller
{
   function __construct()
    {
        parent::__construct();
        $this->load->model('Api_data');        
    }

public function index(){
			$this->load->helper(array('form', 'url'));
			$this->load->view('request_view');
      $this->load->model('Api_data');
		}



public function data(){
  $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://uat-dmvic.azure-api.net/api/V1/Account/Login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\n\"Username\": \"takafulapiuser@dmvic.info\",\n\n\"Password\": \"t@K@kaFuL\"\n\n\n}\n\n",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 957ecb2f-293c-c757-d09e-0ce698cb56a4"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 echo $response;
 $decorded_data=json_decode($response);
 $response_data=array($decorded_data);
 $response_data['token']=$this->input->get('token');
  $response_data['issueAt']=$this->input->get('issueAt');
  $response_data['expires']=$this->input->get('expires');
 $response_data['firstName']=$this->input->get('firstName');
  $response_data['loginUserId']=$this->input->get('loginUserId');
 $this->Api_data->inset_api_data($decorded_data);

 //$this->Api_data->inset_api_data();

}

 

}




}



