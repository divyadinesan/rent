<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usercontroller extends CI_Controller
{

	public function user_index()
	{
		$this->load->view('User/user_index');
	}
	public function user_login()
	{
		$this->load->view('User/user_login');
	}
	public function user_registration()
	{
		$this->load->view('User/user_registration');
	}
	
	public function user_reg_insrt()
	{
		$name=$this->input->post('Name');
		$email=$this->input->post('Email');
		$Phone_number=$this->input->post('Number');
		$user_password=$this->input->post('Password');
		$this->load->model('User_model');
		$count=$this->User_model->already_regi_model($email);
		if($count==0)
		{
		$reginsrt=array('user_name'=>$name,'user_email'=>$email,'user_password'=>$user_password,'user_phn'=>$Phone_number);
		$this->load->model('User_model');
		$result=$this->User_model->regi_model($reginsrt);
		if($result==1)
		{
			echo "<script>alert('Registered Successfully!!')</script>";
			$this->user_index();
		}
		else
		{
			echo "<script>alert('Invalid input')</script>";
			$this->user_index();
		}
		}
		else
		{
			echo "<script>alert('Already Registered!!')</script>";
			$this->user_index();
		}

	
	}
	public function user_login_insr()
	{
		
		$email=$this->input->post('Email');
		$user_password=$this->input->post('Password');
		$logininsrt=array('user_email'=>$email,'user_password'=>$user_password);
		$this->load->model('User_model');
		$count=$this->User_model->login_model($logininsrt);
		if($count>0)
		{
			echo "<script>alert('Thank you for your login')</script>";
			$this->session->set_userdata('email',$email);
			$this->user_home();
		}
		else
		{
			echo "<script>alert('Invalid input')</script>";
			$this->user_index();
		}
	}
	public function user_home()
	{
		 if($this->session->has_userdata('email'))
		 {
			$this->load->model('Vendor_model');
			

			$exe['category']=$this->Vendor_model->category_fetch_model();
			$exe['vehicle']=$this->Vendor_model->vehicle_fetch_model();
			$this->load->view('User/user_home',$exe);
		 }
		 else
		 {
		 	$this->user_index();
		 }
	}

	public function user_veh_product($catid)
	{
		 if($this->session->has_userdata('email'))
		 {
		 	$this->load->model('Vendor_model');
			$this->load->model('user_model');
			$exe['vehicle']=$this->user_model->vehicle_cid_fetch_model($catid);
			$exe['category']=$this->Vendor_model->category_fetch_model();
			$this->load->view('User/user_veh_product',$exe);
		 }
		 	else
		 {
		 	$this->user_index();
		 }

	}


	public function signout()
	{
		$this->session->sess_destroy();
	$this->user_index();
	}

	
	public function vehicle_single($veh_id)
	{	 
		if($this->session->has_userdata('email'))
		 {
		$this->load->model('User_model');
		
		$exe['vehicle']=$this->User_model->vehicle_vid_fetch_model($veh_id);
		$exe['review']=$this->User_model->review_vehicle_fetch($veh_id);
		$exe['user']=$this->User_model->user_fetch_model();
		$this->load->view('User/vehicle_single',$exe);
	 }
	 	else
	 	{
	 		$this->user_index();
	 	}
	}
	public function house_review()
	{
		if($this->session->has_userdata('email'))
		{
		$userid=$this->input->post('userid');
		$username=$this->input->post('username');
		$mail=$this->input->post('user_mail');
		$house_id=$this->input->post('house_id');
		// $veh_id=$this->input->post('Address');
		
		$review=$this->input->post('review');
		$h_rating=$this->input->post('h_rating');
		$h_date=date('y-m-d');
		$add=array('user_id'=>$userid,'user_email'=>$mail,'user_name'=>$username,'house_id'=>$house_id,'review'=>$review,'rating'=>$h_rating,'review_date'=>$h_date);
		$this->load->model('User_model');
		$exe=$this->User_model->house_review_model($add);
		if($exe==1)
		{
			echo "<script>alert('Thank you for your Review')</script>";
			$this->myhouse_booking();
		}
		else
		{
			echo "<script>alert('Try Again')</script>";
			
		}
	}
		else
		{
			$this->user_index();
		}
	}
	public function vehicle_review()
	{
		if($this->session->has_userdata('email'))
		{
		$userid=$this->input->post('userid');
		$username=$this->input->post('username');
		$mail=$this->input->post('mail');
		$veh_id=$this->input->post('veh_id');
		$review=$this->input->post('review');
		$v_rating=$this->input->post('v_rating');
		$v_date=date('y-m-d');
		$add=array('veh_rev_vehicleid'=>$veh_id,'veh_rev_userid'=>$userid,'veh_rev_email'=>$mail,'veh_rev_user_name'=>$username,'veh_rev_rating'=>$v_rating,'veh_rev_date'=>$v_date,'veh_rev_reviiew'=>$review);
		$this->load->model('User_model');
		$exe=$this->User_model->vehicle_review_model($add);
		if($exe==1)
		{
			echo "<script>alert('Thank you for your Review')</script>";
			$this->myvehicle_booking();
		}
		else
		{
			echo "<script>alert('Try Again')</script>";
			
		}
	}
		else
		{
			$this->user_index();
		}
	}

	public function veh_booking_insrt()
	{
		if($this->session->has_userdata('email'))
		{
		$user_id=$this->input->post('user_id');
		$vendor_id=$this->input->post('vendor_id');
		$vendor_email=$this->input->post('vendor_email');
		$email=$this->input->post('email');
		$vehicle_id=$this->input->post('vehicle_id');
		$name=$this->input->post('name');
		$number=$this->input->post('number');
		$location=$this->input->post('location');
		$destination=$this->input->post('destination');
		$booking_date=$this->input->post('booking_date');
		$start_date=$this->input->post('start_date');
		$return_date=$this->input->post('return_date');
		$amount=$this->input->post('amount');
		$todaydate=date('y-m-d');
		$image=$_FILES['licence']['name'];
		$time = Time();
		$images = explode('.',$image);
		$photo =$time.'.'.end($images);
		$config['upload_path']= './Asset/User/licence/';
		$config['allowed_types']= 'jpg|png|jpeg';
		$config['file_name'] = $photo;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->load->model('Vendor_model');
			$this->load->model('User_model');
			$count=$this->User_model->already_vehbook_model($vehicle_id);
			if($count==0)
			{
					//date check
			if(strtotime($todaydate)<strtotime($start_date) && strtotime($start_date)<=strtotime($return_date))
			{
				//date check
				if( $this->upload->do_upload('licence'))
				{	

							$add=array('vb_userid'=>$user_id,'vb_vendor_id'=>$vendor_id,'vb_vendor_email'=>$vendor_email,'vb_vehicleid'=>$vehicle_id,'vb_email'=>$email,'vb_name'=>$name,'vb_number'=>$number,'vb_start_location'=>$location,'vb_destination'=>$destination,'booking_date'=>$booking_date,'vb_start_date'=>$start_date,'return_date'=>$return_date,'licence'=>$photo,'vb_amount'=>$amount,'vb_status'=>"Not Confirmed",'payment'=>"Waiting for Payment");
							$this->load->model('User_model');
							$exe=$this->User_model->vehicle_booking_model($add);
							if($exe==1)
							{
								echo "<script>alert('Thank you for your Booking! Please wait for Vendor Conformation')</script>";
								$this->myvehicle_booking();
							}
							else
							{
								echo "<script>alert('Try Again')</script>";
								$this->user_home();
								
							}
				}
				else
				{
					echo "<script>alert('Invalid Image')</script>";
					$this->user_home();
				}
//date check
}
		else
		{
			echo "<script>alert('Enter Proper Date')</script>";
			$this->user_home();
		}
			//date check

			}
			else
			{
			echo "<script>alert('Already Booking')</script>";
			$this->user_home();
			}
		}
		else
		{
			$this->user_index();
		}

	}
	public function myvehicle_booking()
	{

		if($this->session->has_userdata('email'))
		{
		$this->load->model('User_model');
		$exe['mybooking']=$this->User_model->myvehicle_booking_model();
		$this->load->view('User/myvehicle_booking',$exe);
	}
		else
		{
			$this->user_index();
		}

	}
	public function veh_book_cancel($vb_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('User_model');
			
			$exe=$this->User_model->veh_book_cancel_model($vb_id);
			if($exe==1)
			{
				echo "<script>alert('Your Booking is Cancelled')</script>";
				$this->myvehicle_booking();
			}
			else
			{
				echo "<script>alert('Try Again')</script>";
				$this->user_home();
				
			}
		}
		else
		{
			$this->user_index();
		}

	}
	public function user_myprofile()
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('User_model');
		$result['prof']=$this->User_model->user_myprofile_model();
		$this->load->view('User/user_myprofile',$result);
	
		}
		else
		{
			$this->user_index();
		}
	}

	public function user_prof_update()
	{
		if($this->session->has_userdata('email'))
		{
			$name=$this->input->post('name');
    		$phone=$this->input->post('phone');
    		$email=$this->input->post('email');

    		$password=$this->input->post('password');
    		$result=array('user_name'=>$name,'user_email'=>$email,'user_password'=>$password,'user_phn'=>$phone);
			$this->load->model('User_model');
			$var=$this->User_model->user_prof_update_model($result);
			if($var==1)
			{
				echo "<script>alert('updated')</script>";
				$this->user_myprofile();

			}
			else
			{
				echo"<script>alert('not updated')</script>";
				$this->user_myprofile();
			}
		}
		else
		{
			$this->user_index();
		}
	}

	public function veh_book_details($vb_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('User_model');
			$exe['vehicle']=$this->User_model->myvehicle_booking_details_model($vb_id);
			$this->load->view('User/veh_book_details',$exe);
		}
		else
		{
			$this->user_index();
		}
	}
	public function vehicle_payment()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('User_model');
			$exe['veh_pay']=$this->User_model->vehicle_payment_model();
			$this->load->view('User/vehicle_payment',$exe);
		}
		else
		{
			$this->user_index();
		}

	}
	public function veh_pay_insrt()
	{
		if($this->session->has_userdata('email'))
		{
			$pay_user_id=$this->input->post('user_id');
			$pay_veh_id	=$this->input->post('vehicle_id');
			$pay_user_email	=$this->input->post('user_email');
			$pay_crd_hldr_name=$this->input->post('chn');	
			$pay_card_number=$this->input->post('pay_card_number');	
			$pay_crd_exp_date=$this->input->post('pay_crd_exp_date');	
			$pay_cvc=$this->input->post('pay_cvc');
			$pay_amout=$this->input->post('pay_amout');
			$payment_date=date('y-m-d');
			$result=array('pay_user_id'=>$pay_user_id,'pay_veh_id'=>$pay_veh_id,'pay_user_email'=>$pay_user_email,'pay_crd_hldr_name'=>$pay_crd_hldr_name	,'pay_card_number'=>$pay_card_number,'pay_crd_exp_date'=>$pay_crd_exp_date	,'pay_cvc'=>$pay_cvc,'pay_amout'=>$pay_amout,'payment_date'=>$payment_date);
			$this->load->model('User_model');
			$var=$this->User_model->veh_pay_insrt_model($result);
			if($var==1)
			{
				$paid=array('payment'=>'Paid');
				$this->load->model('User_model');
				$exe1=$this->User_model->myvehicle_payment_model($pay_veh_id,$paid);
				if($exe1==1)
				{
					$rending=array('v_status'=>'Rending');
					$this->load->model('User_model');
					$exe2=$this->User_model->myvehicle_rending_model($pay_veh_id,$rending);
					if($exe2==1)
					{
					 echo "<script>alert('Payment Successfully Completed')</script>";
					 $this->myvehicle_booking();
					}
					else
					{
							$this->myvehicle_booking();
					}
				}
				else
				{
					$this->myvehicle_booking();
				}
				

			}
			else
			{
				echo"<script>alert('not updated')</script>";
				$this->myvehicle_booking();
			}
		}
			
		else
		{
			$this->user_index();
		}

	}

	public function hse_review($hb_house_id)
	{
		$this->load->model('User_model');
	 		$exe['user']=$this->User_model->user_fetch_model();
	 		$exe['house']=$this->User_model->house_review_fetch_model($hb_house_id);
	 		$this->load->view('User/hse_review',$exe);
	}
	public function vehicle_invoice($veh_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('User_model');
			$exe['veh_invoice']=$this->User_model->vehicle_invoice_model($veh_id);
			$this->load->view('User/vehicle_invoice',$exe);
		}
			
		else
		{
			$this->user_index();
		}
	}

	
	
	  public function veh_return($vb_vehicleid)
	  {
	  	if($this->session->has_userdata('email'))
	  	{
	  		$available=array('v_status'=>'Available');
	  		 		$this->load->model('User_model');
	  		 		$veh_available=$this->User_model->vehicle_available_model($available,$vb_vehicleid);
	  		 // $this->load->model('User_model');
	  		 // $delete=$this->User_model->return_vehicle_model($vb_vehicleid);
	  		 		if($veh_available==1)
	  
	  		 {
	  		 		$this->load->model('User_model');
	  		 		 $delete=$this->User_model->return_vehicle_model($vb_vehicleid);
	  		 		if($delete==1)	  		 		
	  		 		{
	  		 		echo "<script>alert('Thankyou!!  vehicle returned Successfully')</script>";
					 $this->user_home();
					}
					else
					{
					$this->user_home();
					}
			 			
 	 	 			
	  		 }
			
	 	}
			
	 	else
	 	{
	 		$this->user_index();
	 	}


	  }


	public function return_vehicle($vb_id)
	 {
		if($this->session->has_userdata('email'))
	 	{
	 		$this->load->model('User_model');
			$exe['veh_return_view']=$this->User_model->vehicle_return_view_model();
	 		$this->load->view('User/return_vehicle',$exe);
	 	}
			
	 	else
	 	{
	 		$this->user_index();
	 	}


	 }

	 public function veh_review($vb_vehicleid)
	 {
	 	if($this->session->has_userdata('email'))
	 	{
	 		$this->load->model('User_model');
	 		$exe['user']=$this->User_model->user_fetch_model();
	 		$exe['vehicle']=$this->User_model->vehicle_review_fetch_model($vb_vehicleid);
	 		$this->load->view('User/veh_review',$exe);
	 	}
			
	 	else
	 	{
	 		$this->user_index();
	 	}

	 }

	 public function user_hse_product($catid)
	{
		 if($this->session->has_userdata('email'))
		 {
			$this->load->model('Vendor_model');
			$this->load->model('user_model');
			$exe['house']=$this->user_model->house_cid_fetch_model($catid);
			$exe['category']=$this->Vendor_model->category_fetch_model();
			$this->load->view('User/user_hse_product',$exe);
		 }
		 	else
		 {
		 	$this->user_index();
		 }

	}


	public function house_single($house_id)
	{	 
		if($this->session->has_userdata('email'))
		 {
		$this->load->model('User_model');
		
		$exe['house']=$this->User_model->house_hid_fetch_model($house_id);

		$exe['review']=$this->User_model->review_house_fetch($house_id);
		$exe['user']=$this->User_model->user_fetch_model();
		$this->load->view('User/house_single',$exe);
	 	}
	 	else
	 	{
	 		$this->user_index();
	 	}
	}

	public function house_booking_insrt()
	{
		if($this->session->has_userdata('email'))
		{
		$user_id=$this->input->post('user_id');
		$user_email=$this->input->post('user_email');
		$house_id=$this->input->post('house_id');
		$vendor_id=$this->input->post('vendor_id');
		$vendor_email=$this->input->post('vendor_email');
		$house_rent=$this->input->post('house_rent');
		$h_Address=$this->input->post('h_Address');
		$booking_date=$this->input->post('booking_date');
			$hb_stay_date=$this->input->post('hb_stay_date');
		$hb_return_date=$this->input->post('hb_return_date');
			
		$month=$this->input->post('month');
		$token_amount=$this->input->post('token_amount');
		$amount=$house_rent*$month;
		$todaydate=date('y-m-d');
		$this->load->model('User_model');
		$count=$this->User_model->already_hsebook_model($house_id);
		if($count==0)
		{

			//date check
			if(strtotime($todaydate)<strtotime($hb_stay_date) && strtotime($hb_stay_date)<strtotime($hb_return_date))
			{
				//date check
		$add=array('hb_user_id'=>$user_id,'hb_user_email'=>$user_email,'hb_house_id'=>$house_id,'hb_vendor_id'=>$vendor_id,'hb_vendor_email'=>$vendor_email,'hb_hse_address'=>$h_Address,'hb_bking_date'=>$booking_date,'hb_stay_date'=>$hb_stay_date,'hb_return_date'=>$hb_return_date,'hb_total_month'=>$month,'hb_rent'=>$house_rent,'hb_token_amount'=>$token_amount,'hb_status'=>"Not Confirmed",'hb_payment'=>"Waiting for Payment",'hb_amount'=>$amount);
		$this->load->model('User_model');
	 	$exe=$this->User_model->house_booking_model($add);
	 	if($exe==1)
	 	{

	 		
	 		
	 		echo "<script>alert('Thank you for your Booking! Please wait for Vendor Conformation')</script>";
			$this->myhouse_booking();
			
		}
		else
		{
			echo "<script>alert('Try Again')</script>";
			$this->user_home();
			
		}
		//date check
}
		else
		{
			echo "<script>alert('Enter Proper Date')</script>";
			$this->user_home();
		}
			//date check
		}
		else
		{
			echo "<script>alert('Already Booking')</script>";
			$this->user_home();
		}
	}
		else
		{
			$this->user_index();
		}

	}

	public function myhouse_booking()
	{

		if($this->session->has_userdata('email'))
		{
		$this->load->model('User_model');
		$exe['house']=$this->User_model->myhouse_booking_model();
		$this->load->view('User/myhouse_booking',$exe);
	}
		else
		{
			$this->user_index();
		}

	}


	public function hse_book_cancel($hb_house_id)
	{
		if($this->session->has_userdata('email'))
		{
			 $this->load->model('User_model');
			
			 $exe=$this->User_model->hse_book_cancel_model($hb_house_id);
			 if($exe==1)
			 {
			 	$available=array('h_status'=>'Available');
	   		 	$this->load->model('User_model');
	  		 	$hse_available=$this->User_model->house_available_model($available,$hb_house_id);
	  		 		if($hse_available==1)

	  		 		{
					echo "<script>alert('Your Booking is Cancelled')</script>";
					$this->myhouse_booking();
					}
					else
					{
						echo "<script>alert('Try Again')</script>";
						$this->user_home();
						
					}
			 	}
			 	else
			 	{
			 					$this->user_index();

			 	}
		}
		else
		{
			$this->user_index();
			
		}
	}



	public function house_payment()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('User_model');
			$exe['hse_pay']=$this->User_model->house_payment_model();
			$this->load->view('User/house_payment',$exe);
		}
		else
		{
			$this->user_index();
		}

	}

	


	public function hse_pay_insrt()
	{
		if($this->session->has_userdata('email'))
		{
			$pay_user_id=$this->input->post('user_id');
			$pay_hse_id	=$this->input->post('house_id');
			$pay_user_email	=$this->input->post('user_email');
			$pay_crd_hldr_name=$this->input->post('chn');	
			$pay_card_number=$this->input->post('pay_card_number');	
			$pay_crd_exp_date=$this->input->post('pay_crd_exp_date');	
			$pay_cvc=$this->input->post('pay_cvc');
			$pay_amout=$this->input->post('pay_amout');
			$paydate=date('y-m-d');
			$result=array('pay_hse_id'=>$pay_hse_id,'pay_user_id'=>$pay_user_id,'pay_user_email'=>$pay_user_email,'pay_cvc'=>$pay_cvc,'pay_crd_hldr_name'=>$pay_crd_hldr_name,'pay_crd_exp_date'=>$pay_crd_exp_date,'pay_card_number'=>$pay_card_number,'pay_amount'=>$pay_amout,'pay_date'=>$paydate);
			$this->load->model('User_model');
			$var=$this->User_model->hse_pay_insrt_model($result);
			if($var==1)
			{
				$paid=array('hb_payment'=>'Paid');
				$this->load->model('User_model');
				$exe1=$this->User_model-> myhouse_payment_model($pay_hse_id,$paid);
				if($exe1==1)
				{
					$rending=array('h_status'=>'Rending');
					$this->load->model('User_model');
					$exe2=$this->User_model->myhouse_rending_model($pay_hse_id,$rending);
					if($exe2==1)
					{
						 // $rem_amnt=array('hb_amount'=>'hb_rent-hb_token_amount');
						 // $this->load->model('User_model');
						 // $exe3=$this->User_model->myhouse_rent_model($pay_hse_id,$rem_amnt);
						 // if($exe3==1)
						 // {
					 	echo "<script>alert('Token Payment Successfully Payed')</script>";
					 	$this->myhouse_booking();
					 	// }
					 	// else
					 	// {
					 	// 	$this->myhouse_booking();

					 	// }
					
					}
					else
					{
							$this->myhouse_booking();
					}
				}
				else
				{
					$this->myhouse_booking();
				}
				

			}
			else
			{
				echo"<script>alert('not updated')</script>";
				$this->myhouse_booking();
			}
		}
			
		else
		{
			$this->user_index();
		}

	}
public function house_invoice($hb_house_id)
	 {
		if($this->session->has_userdata('email'))
	 	{
	 		$this->load->model('User_model');
			$ArrData['hse_invoice']=$this->User_model->house_invoice_model($hb_house_id);
	 		$this->load->view('User/house_invoice',$ArrData);
	 	}
			
	 	else
	 	{
	 		$this->user_index();
	 	}


	 }

	public function house_return()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('User_model');
			$exe['hse_return_view']=$this->User_model->house_return_view_model();
			$this->load->view('User/house_return',$exe);
		}
			
		else
		{
			$this->user_index();
		}

	}

	public function return_house($hb_id)
	 {
		if($this->session->has_userdata('email'))
	 	{
	 		$this->load->model('User_model');
			$exe['hse_return_view']=$this->User_model->house_return_view_model();
	 		$this->load->view('User/return_house',$exe);
	 	}
			
	 	else
	 	{
	 		$this->user_index();
	 	}


	 }

	 public function hse_return($hb_house_id)
	  {
	  	if($this->session->has_userdata('email'))
	  	{
	  		$available=array('h_status'=>'Available');
	  		 		$this->load->model('User_model');
	  		 		$hse_available=$this->User_model->house_available_model($available,$hb_house_id);
	  		 	if($hse_available==1)
	  		 	{
	  		 		$this->load->model('User_model');
	  		 		 $delete=$this->User_model->return_house_model($hb_house_id);
	  		 		if($delete==1)	  		 		
	  		 		{
	  		 		echo "<script>alert('Thankyou!! House returned Successfully')</script>";
					 $this->user_home();
					}
					else
					{
					$this->user_home();
					}
			 			
 	 	 			
	  		 	}
			
	 	}
			
	 	else
	 	{
	 		$this->user_index();
	 	}


	  }

	  public function logout()
	{
		$this->session->sess_destroy();
    return redirect('Indexcontroller/index');
	}



	


}
