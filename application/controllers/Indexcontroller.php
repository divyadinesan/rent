<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexcontroller extends CI_Controller
{

public function index()
	{

		$this->load->model('Vendor_model');
		$exe['vehicle']=$this->Vendor_model->vehicle_fetch_model();
		$exe['category']=$this->Vendor_model->category_fetch_model();
		$this->load->view('Index/index',$exe);
	}


















}