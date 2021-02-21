<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Test_model');
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function getOfficeList(){
		$result=$this->Test_model->getOffices();
		echo "<pre>";
		print_r($result);
	}
	public function createOffice(){
		$data=array('city' => 'Mumbai', 'phone' =>'9912345678', 'addressLine1' => 'Xyz','state'=>'Maharashtra','country'=>'India','postalCode'=>400078,'territory'=>'Thane');
		$this->Test_model->insertOffice($data);
	}

	public function createOffices(){
		$data=array(array('city' => 'Mumbai', 'phone' =>'9912345600', 'addressLine1' => 'ABc Xyz','state'=>'Maharashtra','country'=>'India','postalCode'=>400078,'territory'=>'Thane'),array('city' => 'Banglore North', 'phone' =>'9912345400', 'addressLine1' => 'ABc jkl Xyz','state'=>'Karnataka','country'=>'India','postalCode'=>560008,'territory'=>'Banglore North'));
		$this->Test_model->insertOffices($data);
	}
}
