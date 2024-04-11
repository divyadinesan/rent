<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller
{
	public function login()
	{
		$this->load->view('Admin/admin_login');
	}
	public function login_insrt()
	{
		$Email=$this->input->post('Email');
	$Password=$this->input->post('Password');
	$admin_log=array('admin_email'=>$Email,'admin_password'=>$Password);
	$this->load->model('Admin_model');
	$count=$this->Admin_model->log_admin($admin_log);
	if($count>0)
	{
		echo "<script>alert('Thank you')</script>";
		$this->session->set_userdata('Email',$Email);
		$this->admin_chnge_password();
	}
	else
	{
		echo "<script>alert('Login failed')</script>";
		$this->login();
	}
	}
	public function booking_details()
	{
		if($this->session->has_userdata('Email'))
		{
		$this->load->model('Admin_model');
		$ArrData['vehicle']=$this->Admin_model->vehicle_booking_model();
		$ArrData['house']=$this->Admin_model->house_booking_model();
		$this->load->view('Admin/booking_details',$ArrData);
		}
		else
		{
			$this->login();
		}
	}
	
	public function admin_add_vendor()
	{
		if($this->session->has_userdata('Email'))
		{
		$this->load->model('Admin_model');
		$vendor['vendor']=$this->Admin_model->Adminadded_vendor_model();
		$this->load->view('Admin/admin_add_vendor',$vendor);
		}
		else
		{
			$this->login();
		}
	}
	public function admin_vendor_insrt()
	{

		$name=$this->input->post('Name');
        $email=$this->input->post('Email');
        $Phone=$this->input->post('Phone');
        $password=$this->input->post('Password');
        $occupation=$this->input->post('Occupation');
        $Address=$this->input->post('Address');
        
        $this->load->model('Admin_model');
		$count=$this->Admin_model->vndr_alrdy_model($email);
		if($count==0)
		{

		$vendor_add=array('vndr_name'=>$name,'vndr_email'=>$email,'vndr_phone'=>$Phone,'vndr_password'=>$password,'vndr_address'=>$Address,'vndr_occupation'=>$occupation,'vndr_status'=>'Approved','vndr_type'=>'Admin');
		$this->load->model('Admin_model');
		$result=$this->Admin_model->admin_vendor_model($vendor_add);
		if($result==1)
		{
			echo "<script>alert('Vendor Added Successfully!!')</script>";
			$this->admin_add_vendor();
		}
		else
		{
			echo "<script>alert('Failed')</script>";
			$this->admin_add_vendor();
		
		}
	}
		else
		{
			echo "<script>alert('Vendor Already Added!!')</script>";
			$this->admin_add_vendor();
		}
	}
	public function vendor_details()
	{
		if($this->session->has_userdata('Email'))
		{
		$this->load->model('Admin_model');
		$vendor['vendor']=$this->Admin_model->vendor_model();
		$this->load->view('Admin/vendor_details',$vendor);
		}
		else
		{
			$this->login();
		}
	}


	public function vendor_edit($vendor_id)
	{
		if($this->session->has_userdata('Email'))
		{
		$this->load->model('Admin_model');
		$vendor['vendor']=$this->Admin_model->vendor_fetch_model($vendor_id);
		$this->load->view('Admin/vendor_edit',$vendor);
		}
		else
		{
			$this->login();
		}
	}

	public function vendor_delete($vendor_id)
	{
		$this->load->model('Admin_model');
		$deleted=$this->Admin_model->vendor_delete_model($vendor_id);
		if($deleted==1)
		{
			echo "<script>alert('deleted Successfully!!')</script>";
			$this->admin_add_vendor();
		}
		else
		{
			echo "<script>alert('Failed to delete')</script>";
			$this->admin_add_vendor();
		
		}
	}
	public function payment_details()
	{
		if($this->session->has_userdata('Email'))
		{
		$this->load->model('Admin_model');
		$ArrData['vehicle']=$this->Admin_model->vehicle_payment_fetch_model();
		$ArrData['house']=$this->Admin_model->house_payment_fetch_model();
		$this->load->view('Admin/payment_details',$ArrData);
		}
		else
		{
			$this->login();
		}
	}


	public function vendor_update()
	{
		$vendor_id=$this->input->post('vendor_id');
		$name=$this->input->post('Name');
        $email=$this->input->post('Email');
        $Phone=$this->input->post('Phone');
        $password=$this->input->post('Password');
        $occupation=$this->input->post('Occupation');
        $Address=$this->input->post('Address');
        $vendor=array('vndr_name'=>$name,'vndr_email'=>$email,'vndr_phone'=>$Phone,'vndr_password'=>$password,'vndr_address'=>$Address,'vndr_occupation'=>$occupation);
        $this->load->model('Admin_model');
        $result=$this->Admin_model->update_vendor_model($vendor,$vendor_id);
        if($result)
		{
			echo "<script>alert('updated Successfully!!')</script>";
			$this->admin_add_vendor();
		}
		else
		{
			echo "<script>alert('Failed')</script>";
			$this->admin_add_vendor();
		
		}
	}
	

	public function user_details()
	{
		if($this->session->has_userdata('Email'))
		{
		$this->load->model('Admin_model');
		$user['user']=$this->Admin_model->user_model();
		$this->load->view('Admin/user_details',$user);
		}
		else
		{
			$this->login();
		}
	}
	public function admin_chnge_password()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Admin_model');
			$admin['admin']=$this->Admin_model->user_fetch_model();
			$this->load->view('Admin/admin_chnge_password',$admin);
		}
		else
		{
			$this->login();
		}
	}
	public function admin_update_password()
	{
		if($this->session->has_userdata('Email'))
		{
		$newpassword=$this->input->post('newpassword');
		 $update=array('admin_password'=>$newpassword);
		 $this->load->model('Admin_model');
		 $result=$this->Admin_model->admin_update_password_model($update);
		if($result==1)
		{
			echo "<script>alert('Success!!')</script>";
			$this->login();
		}
		else
		{
			echo "<script>alert('Failed')</script>";
			$this->admin_chnge_password();
		
		}
		}
		else
		{
			$this->login();
		}

	}
	public function logout()
	{
		$this->session->sess_destroy();
    return redirect('Indexcontroller/index');
	}
	public function verify_vendor()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Admin_model');
			$user_vendor['u_vendor']=$this->Admin_model->uservendor_fetch_model();
			$this->load->view('Admin/admin_verify_vendor',$user_vendor);
		}
		else
		{
			$this->login();
		}

	}
	public function vendor_approve($vendor_id)
	{
		$this->load->model('Admin_model');
		$approve=array('vndr_status'=>'Approved');
		$result=$this->Admin_model->vendor_approve_model($vendor_id,$approve);
		if($result==1)
		{
			echo "<script>alert('Approved Successfully!!')</script>";
			$this->verify_vendor();
		}
		else
		{
			echo "<script>alert('Failed to Approve')</script>";
			$this->verify_vendor();
		
		}
	}

	public function vendor_reject($vendor_id)
	{
		$this->load->model('Admin_model');
		$reject=array('vndr_status'=>'Rejected');
		$result=$this->Admin_model->vendor_reject_model($vendor_id,$reject);
		if($result==1)
		{
			echo "<script>alert('Rejected Successfully!!')</script>";
			$this->verify_vendor();
		}
		else
		{
			echo "<script>alert('Failed to Reject')</script>";
			$this->verify_vendor();
		
		}
	}

	public function Admin_verify_rent()
	{
		if($this->session->has_userdata('Email'))
		{
		$this->load->model('Admin_model');
		$ArrData['vehicle']=$this->Admin_model->Admin_fech_vehicle_model();
		$ArrData['house']=$this->Admin_model->Admin_fech_house_model();
		$this->load->view('Admin/Admin_verify_rent',$ArrData);
		}
		else
		{
			$this->login();
		}
	}

	public function rent_exceed($vehicle_id)
	{
		$Verify=array('v_verify_rent'=>'rent exceed the expected limit');
		$this->load->model('Admin_model');
		$result=$this->Admin_model->rent_verify_model($vehicle_id,$Verify);
		if($result==1)
		{
			echo "<script>alert('Rent Exceed the Expected Limit!!')</script>";
			$this->Admin_verify_rent();
		}
		else
		{
			echo "<script>alert('Failed')</script>";
			$this->Admin_verify_rent();
		
		}
	}

	public function rent_approved($vehicle_id)
	{
		$Verify=array('v_verify_rent'=>'Approved');
		$this->load->model('Admin_model');
		$result=$this->Admin_model->rent_verify_model($vehicle_id,$Verify);
		if($result==1)
		{
			echo "<script>alert('Approved')</script>";
			$this->Admin_verify_rent();
		}
		else
		{
			echo "<script>alert('Failed')</script>";
			$this->Admin_verify_rent();
		
		}
	}

	public function house_rent_exceed($house_id)
	{
		$Verify=array('h_verify_rent'=>'rent exceed the expected limit');
		$this->load->model('Admin_model');
		$result=$this->Admin_model->house_rent_verify_model($house_id,$Verify);
		if($result==1)
		{
			echo "<script>alert('Rent Exceed the Expected Limit!!')</script>";
			$this->Admin_verify_rent();
		}
		else
		{
			echo "<script>alert('Failed')</script>";
			$this->Admin_verify_rent();
		
		}
	}
	public function house_rent_approved($house_id)
	{
		$Verify=array('h_verify_rent'=>'Approved');
		$this->load->model('Admin_model');
		$result=$this->Admin_model->house_rent_verify_model($house_id,$Verify);
		if($result==1)
		{
			echo "<script>alert('Approved')</script>";
			$this->Admin_verify_rent();
		}
		else
		{
			echo "<script>alert('Failed')</script>";
			$this->Admin_verify_rent();
		
		}
	}
	
}