<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendorcontroller extends CI_Controller
{
	public function vendor_index()
	{
		$this->load->view('Vendor/vendor_index');
	}
	
	public function vendor_reginsrt()
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

		$vendor_add=array('vndr_name'=>$name,'vndr_email'=>$email,'vndr_phone'=>$Phone,'vndr_password'=>$password,'vndr_address'=>$Address,'vndr_occupation'=>$occupation,'vndr_status'=>'Requested','vndr_type'=>'Vendor');
		$this->load->model('Admin_model');
		$result=$this->Admin_model->admin_vendor_model($vendor_add);
		if($result==1)
		{
			echo "<script>alert('Vendor Added Successfully!!')</script>";
			$this->vendor_index();
		}
		else
		{
			echo "<script>alert('Failed')</script>";
			$this->vendor_index();
		
		}
	}
		else
		{
			echo "<script>alert('Vendor Already Added!!')</script>";
			$this->vendor_index();
		}
	}
	public function vendor_registration()
	{
		$this->load->view('Vendor/vendor_registration');
	} 
	public function vendor_login()
	{
		$this->load->view('Vendor/vendor_login');
	} 
	public function logininsrt()
	{

        $email=$this->input->post('Email');
        $password=$this->input->post('Password');
        $vendor_log=array('vndr_email'=>$email,'vndr_password'=>$password);
		$this->load->model('Vendor_model');
		 $count=$this->Vendor_model->log_vendor($vendor_log);
		 if($count>0)
		 {
		 	echo "<script>alert('Login Successfully!!')</script>";
		 	$this->session->set_userdata('email',$email);
			$this->vendor_profile();
		 }
		 else
		 {
		 	echo "<script>alert('Failed To Login!!')</script>";
			$this->vendor_index();
		 }
	}

	public function vendor_home()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->view('Vendor/vendor_home');
		}
		else
		{
			$this->vendor_index();
		}
	}

	public function vehicle_delete($vehicle_id)
	{
		$this->load->model('Vendor_model');
		$vehicle_delete=$this->Vendor_model->vehicle_delete_model($vehicle_id);
		if($vehicle_delete==1)
						{
							echo "<script>alert('Deleted successfully')</script>";
							$this->vendor_add_vehicle();
						}
						else
						{
							echo "<script>alert('Fail To Delete')</script>";
							$this->vendor_add_vehicle();
						}

	}
	public function vendor_add_category()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Vendor_model');
			$category['category']=$this->Vendor_model->category_fetch_model();
			$this->load->view('Vendor/vendor_add_category',$category);
		}
		else
		{
			$this->vendor_index();
		}
	}
	public function vendor_category_insrt()
	{
		$category_type=$this->input->post('category_type');

		$category=$this->input->post('category');
			
			
			$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Asset/Vendor/category/';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->load->model('Vendor_model');
			$count=$this->Vendor_model->category_alrdy_model($category);
		if($count==0)
		{
			if( $this->upload->do_upload('image'))
			{
				$add=array('category_name'=>$category,'category_image'=>$photo,'category_type'=>$category_type);
				$this->load->model('Vendor_model');
				$exe=$this->Vendor_model->vendor_catinsrt_model($add);
						if($exe==1)
						{
							echo "<script>alert('Category Added successfully')</script>";
							$this->vendor_add_category();
						}
						else
						{
							echo "<script>alert('Fail To Add Category')</script>";
							$this->vendor_add_category();
						}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->vendor_add_category();
			}
		}
		else
		{
			echo "<script>alert('Category Already Added')</script>";
					$this->vendor_add_category();
		}
	}


	public function vendor_delete_category($category_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Vendor_model');
		$result=$this->Vendor_model->delete_category($category_id);
		if($result==1)
		{
		$this->vendor_add_category();
		}
		else
		{
		$this->vendor_add_category();		
		}

		}
		else
		{
			$this->vendor_index();
		}
	}

	public function vendor_edit_category($category_id)
	{
		if($this->session->has_userdata('email'))
		{
		$this->load->model('Vendor_model');
		$result['cate']=$this->Vendor_model->category_fetch_model();

		$result['cat_edit']=$this->Vendor_model->view_edit_category_model($category_id);
		$this->load->view('Vendor/vendor_edit_category',$result);

		}
		else
		{
			$this->vendor_index();
		}


	}
	public function vendor_category_update()
	{
		if($this->session->has_userdata('email'))
		{
		$category_id=$this->input->post('category_id');
		$category_type=$this->input->post('category_type');
		$category=$this->input->post('category');

		$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './/Asset/Vendor/category/';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$edits_cat=array('category_name'=>$category,'category_image'=>$Add_photos,'category_type'=>$category_type);
		$this->load->model('Vendor_model');
		$result=$this->Vendor_model->edits_categoryy_model($edits_cat,$category_id);
		if($result==1)
		{
			echo "<script>alert('Successfully Updated category')</script>";
			$this->vendor_add_category();
		}
		else
		{
			echo "<script>alert('Failed to update category')</script>";
			$this->vendor_add_category();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->vendor_add_category();
	}
	}
	else
	{
		$edits_cat=array('category_name'=>$category,'category_type'=>$category_type);
		$this->load->model('Vendor_model');
		$result=$this->Vendor_model->edits_categoryy_model($edits_cat,$category_id);
		if($result==1)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->vendor_add_category();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->vendor_add_category();
		}
	}	






		}
		else
		{
			$this->vendor_index();
		}
	}

	public function vendor_add_vehicle()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Vendor_model');
			$exe['vendor']=$this->Vendor_model->vendor_myprofile();
			$exe['category']=$this->Vendor_model->category_fetch_model();
			$exe['vehicle']=$this->Vendor_model->veh_fetch_model();
			$this->load->view('Vendor/vendor_add_vehicle',$exe);
		}
		else
		{
			$this->vendor_index();
		}
	}

	public function vendor_vehicle_insrt()
	{
		$cat_id=$this->input->post('cat_id');
		$vendor_id=$this->input->post('vendor_id');
		$name=$this->input->post('name');
		$number=$this->input->post('number');
		$fuel=$this->input->post('fuel');
		$mileage=$this->input->post('mileage');
		$rent=$this->input->post('rent');
		$description=$this->input->post('description');	
			
			$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Asset/Vendor/vehicle/';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->load->model('Vendor_model');
			if( $this->upload->do_upload('image'))
			{

			$image1=$_FILES['veh1']['name'];
			$time1 = Time();
			$images1 = explode('.',$image1);
			$photo1 =$time1.'.'.end($images1);
			$config1['upload_path']= './Asset/Vendor/vehicle1/';
			$config1['allowed_types']= 'jpg|png|jpeg';
			$config1['file_name'] = $photo1;
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			$this->load->model('Vendor_model');
			if( $this->upload->do_upload('veh1'))
			{
				$image2=$_FILES['veh2']['name'];
			$time2 = Time();
			$images2 = explode('.',$image2);
			$photo2 =$time2.'.'.end($images2);
			$config2['upload_path']= './Asset/Vendor/vehicle2/';
			$config2['allowed_types']= 'jpg|png|jpeg';
			$config2['file_name'] = $photo2;
			$this->load->library('upload', $config2);
			$this->upload->initialize($config2);
			$this->load->model('Vendor_model');
			if( $this->upload->do_upload('veh2'))
			{


							$add=array('v_category_id'=>$cat_id,'v_vendor_id'=>$vendor_id,'v_name'=>$name,'v_number'=>$number,'v_image'=>$photo,'v_image1'=>$photo1,'v_image2'=>$photo2,'v_fuel'=>$fuel,'v_Mileage'=>$mileage,'v_rent'=>$rent,'v_description'=>$description,'v_status'=>'Available','v_verify_rent'=>'Pending');
							$this->load->model('Vendor_model');
							$exe=$this->Vendor_model->vendor_vehinsrt_model($add);
									if($exe==1)
									{
										echo "<script>alert('Vehicle Added successfully')</script>";
										$this->vendor_add_vehicle();
									}
									else
									{
										echo "<script>alert('Fail To Add Vehicle')</script>";
										$this->vendor_add_vehicle();
									}


			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->vendor_add_vehicle();
			}

			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->vendor_add_vehicle();
			}	

			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->vendor_add_vehicle();
			}	
		}

	public function vendor_vehicle_userrequest()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Vendor_model');
			$exe['userbooking_veh']=$this->Vendor_model->vendor_vehicle_userrequest_model();
			$this->load->view('Vendor/vendor_vehicle_userrequest',$exe);
		}
		else
		{
			$this->vendor_index();
		}


	}
	public function veh_bking_cnfrmtion($vb_vehicleid)
	{
	if($this->session->has_userdata('email'))
		{
			$confirmation=array('vb_status'=>'Confirmed');
			$this->load->model('Vendor_model');
			$exe=$this->Vendor_model->veh_bking_cnfrmtion_model($vb_vehicleid,$confirmation);
			if($exe==1)
			{
				$waiting=array('v_status'=>'Waiting');
			$this->load->model('Vendor_model');
			$exe1=$this->Vendor_model->veh_waiting_model($vb_vehicleid,$waiting);
				if($exe1==1)
				
					{
							echo "<script>alert('Confirmed')</script>";
							$this->vendor_vehicle_userrequest();
						}
						else
						{
							echo "<script>alert('Try Again')</script>";
							$this->vendor_vehicle_userrequest();
						}
				
			}
			else
						{
							echo "<script>alert('Try Again')</script>";
							$this->vendor_vehicle_userrequest();
						}
		}
		else
		{
			$this->vendor_index();
		}

	}


	public function veh_bking_rejection($vb_vehicleid)
	{
		if($this->session->has_userdata('email'))
		{
			$confirmation=array('vb_status'=>'Rejected');
			$this->load->model('Vendor_model');
			$exe=$this->Vendor_model->veh_bking_cnfrmtion_model($vb_vehicleid,$confirmation);
			if($exe==1)
			{
				$waiting=array('v_status'=>'Waiting');
			$this->load->model('Vendor_model');
			$exe1=$this->Vendor_model->veh_waiting_model($vb_vehicleid,$waiting);
				if($exe1==1)
				
					{
							echo "<script>alert('Rejected')</script>";
							$this->vendor_vehicle_userrequest();
						}
						else
						{
							echo "<script>alert('Try Again')</script>";
							$this->vendor_vehicle_userrequest();
						}
				
			}
			else
						{
							echo "<script>alert('Try Again')</script>";
							$this->vendor_vehicle_userrequest();
						}
		}
		else
		{
			$this->vendor_index();
		}
	}

	public function vehicle_edit($vehicle_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Vendor_model');
			$exe['vehicle']=$this->Vendor_model->vehicle_edit_model($vehicle_id);
			$this->load->view('Vendor/vehicle_edit',$exe);
		}
		else
		{
			$this->vendor_index();
		}
	}
	public function veh_update()
	{
		$vehicle_id=$this->input->post('vehicle_id');
		//$vendor_id=$this->input->post('vendor_id');
		$name=$this->input->post('name');
		$number=$this->input->post('number');
		$fuel=$this->input->post('fuel');
		$mileage=$this->input->post('mileage');
		$rent=$this->input->post('rent');
		$description=$this->input->post('description');	
		$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/Vendor/vehicle/';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('v_name'=>$name,'v_number'=>$number,'v_image'=>$Add_photos,'v_fuel'=>$fuel,'v_Mileage'=>$mileage,'v_rent'=>$rent,'v_description'=>$description);
				$this->load->model('Vendor_model');
				$exe=$this->Vendor_model->vehicle_update_model($result,$vehicle_id);
		if($exe)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->vendor_add_vehicle();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->vendor_add_vehicle();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->vendor_add_vehicle();
	}
	}
	else
	{
		$result=array('v_name'=>$name,'v_number'=>$number,'v_fuel'=>$fuel,'v_Mileage'=>$mileage,'v_rent'=>$rent,'v_description'=>$description);
		$this->load->model('Vendor_model');
				$exe=$this->Vendor_model->vehicle_update_model($result,$vehicle_id);
		if($exe)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->vendor_add_vehicle();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->vendor_add_vehicle();
		}
	}	
	}

	 public function vendor_add_house()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Vendor_model');
			$exe['vendor']=$this->Vendor_model->vendor_myprofile();
			$exe['category']=$this->Vendor_model->category_fetch_model();
			$exe['house']=$this->Vendor_model->house_fetch_model();
			$this->load->view('Vendor/vendor_add_house',$exe);
		}
		else
		{
			$this->vendor_index();
		}
	}

	public function house_edit($house_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Vendor_model');
			$exe['house']=$this->Vendor_model->house_edit_model($house_id);
			$this->load->view('Vendor/house_edit',$exe);
		}
		else
		{
			$this->vendor_index();
		}
	}

	public function vendor_house_edit()
	{
		$house_id=$this->input->post('house_id');
		 //$cat_id=$this->input->post('cat_id');
		// $vendor_id=$this->input->post('vendor_id');
		 $rent=$this->input->post('rent');
		 $Address=$this->input->post('Address');
		 $Property_Size=$this->input->post('Property_Size');
		 $Total_Rooms=$this->input->post('Total_Rooms');
		 $Bedrooms=$this->input->post('Bedrooms');
		 $Bathrooms=$this->input->post('Bathrooms');
		 $Year_Build=$this->input->post('Year_Build');
		 $description=$this->input->post('Description');
		 $image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/Vendor/house/';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$edits_cat=array('h_Address'=>$Address,'h_Property_Size'=>	$Property_Size,'h_Total_Rooms'=>$Total_Rooms,'h_Bedrooms'=>$Bedrooms,'h_Bathrooms'=>$Bathrooms,'h_Year_Build'=>$Year_Build,'h_description'=>$description,'h_rent'=>$rent,'h_image'=>$Add_photos);
		$this->load->model('Vendor_model');
		$result=$this->Vendor_model->edits_vendor_model($edits_cat,$house_id);
		if($result==1)
		{
			echo "<script>alert('Successfully Updated category')</script>";
			$this->vendor_add_house();
		}
		else
		{
			echo "<script>alert('Failed to update category')</script>";
			$this->vendor_add_house();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->vendor_add_house();
	}
	}
	else
	{
		$edits_cat=array('h_Address'=>$Address,'h_Property_Size'=>	$Property_Size,'h_Total_Rooms'=>$Total_Rooms,'h_Bedrooms'=>$Bedrooms,'h_Bathrooms'=>$Bathrooms,'h_Year_Build'=>$Year_Build,'h_description'=>$description,'h_rent'=>$rent);
		$this->load->model('Vendor_model');
		$result=$this->Vendor_model->edits_vendor_model($edits_cat,$house_id);
		if($result==1)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->vendor_add_house();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->vendor_add_house();
		}
	}	





	}

	public function vendor_house_insrt()
	{
		 $cat_id=$this->input->post('cat_id');
		 $vendor_id=$this->input->post('vendor_id');
		 $vendor_email=$this->input->post('vendor_email');
		 $Address=$this->input->post('Address');
		 $Property_Size=$this->input->post('Property_Size');
		 $Total_Rooms=$this->input->post('Total_Rooms');
		 $Bedrooms=$this->input->post('Bedrooms');
		 $Bathrooms=$this->input->post('Bathrooms');
		 $Year_Build=$this->input->post('Year_Build');
		 $description=$this->input->post('description');	
		 $rent=$this->input->post('rent');	
			$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Asset/Vendor/house/';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->load->model('Vendor_model');
			if( $this->upload->do_upload('image'))
			{


			$image1=$_FILES['aggrement']['name'];
			$time1 = Time();
			$images1 = explode('.',$image1);
			$photo1 =$time1.'.'.end($images1);
			$config1['upload_path']= './Asset/Vendor/aggrement/';
			$config1['allowed_types']= 'pdf';
			$config1['file_name'] = $photo1;
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			$this->load->model('Vendor_model');
			if( $this->upload->do_upload('aggrement'))
			{

			$image2=$_FILES['room1']['name'];
			$time2 = Time();
			$images2 = explode('.',$image2);
			$photo2 =$time2.'.'.end($images2);
			$config2['upload_path']= './Asset/Vendor/room1/';
			$config2['allowed_types']= 'jpg|png|jpeg|pdf';
			$config2['file_name'] = $photo2;
			$this->load->library('upload', $config2);
			$this->upload->initialize($config2);
			$this->load->model('Vendor_model');
			if( $this->upload->do_upload('room1'))
			{
				$image3=$_FILES['room2']['name'];
			$time3 = Time();
			$images3 = explode('.',$image3);
			$photo3 =$time3.'.'.end($images3);
			$config3['upload_path']= './Asset/Vendor/room2/';
			$config3['allowed_types']= 'jpg|png|jpeg|pdf';
			$config3['file_name'] = $photo3;
			$this->load->library('upload', $config3);
			$this->upload->initialize($config3);
			$this->load->model('Vendor_model');
			if( $this->upload->do_upload('room2'))
			{

									$add=array('h_category_id'=>$cat_id,'h_vendor_id'=>$vendor_id,'h_vendor_email'=>$vendor_email,'h_Address'=>$Address,'h_Property_Size'=>	$Property_Size,'h_Total_Rooms'=>$Total_Rooms,'h_Bedrooms'=>$Bedrooms,'h_Bathrooms'=>$Bathrooms,'h_Year_Build'=>$Year_Build,'h_description'=>$description,'h_rent'=>$rent,'h_image'=>$photo,'h_status'=>'Available','h_aggrement'=>$photo1,'h_room1'=>$photo2,'h_room2'=>$photo3,'h_verify_rent'=>'Pending');	

									$this->load->model('Vendor_model');
									$exe=$this->Vendor_model->vendor_hseinsrt_model($add);
											if($exe==1)
											{
												echo "<script>alert(' Added successfully')</script>";
												$this->vendor_add_house();
											}
											else
											{
												echo "<script>alert('Fail To Add ')</script>";
												$this->vendor_add_house();
											}
				}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->vendor_add_house();
			}
			


			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->vendor_add_house();
			}
		
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->vendor_add_house();
			}

			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->vendor_add_house();
			}


	}


public function vendor_house_userrequest()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Vendor_model');
			$exe['userbooking_hse']=$this->Vendor_model->vendor_house_userrequest_model();
			$this->load->view('Vendor/vendor_house_userrequest',$exe);
		}
		else
		{
			$this->vendor_index();
		}


	}

	public function house_delete($house_id)
	{
		$this->load->model('Vendor_model');
		$house_delete=$this->Vendor_model->house_delete_model($house_id);
		if($house_delete==1)
						{
							echo "<script>alert('Deleted successfully')</script>";
							$this->vendor_add_house();
						}
						else
						{
							echo "<script>alert('Fail To Delete')</script>";
							$this->vendor_add_house();
						}
	}

	public function hse_bking_cnfrmtion($hb_house_id)
	{
		if($this->session->has_userdata('email'))
		{
			$confirmation=array('hb_status'=>'Confirmed');
			$this->load->model('Vendor_model');
			$exe=$this->Vendor_model->hse_bking_cnfrmtion_model($hb_house_id,$confirmation);
			if($exe==1)
			{
				$waiting=array('h_status'=>'Waiting');
			$this->load->model('Vendor_model');
			$exe1=$this->Vendor_model->hse_waiting_model($hb_house_id,$waiting);
				if($exe1==1)
				
					{
							echo "<script>alert('Confirmed')</script>";
							$this->vendor_house_userrequest();
						}
						else
						{
							echo "<script>alert('Try Again')</script>";
							$this->vendor_house_userrequest();
						}
				
			}
			else
						{
							echo "<script>alert('Try Again')</script>";
							$this->vendor_house_userrequest();
						}
		}
		else
		{
			$this->vendor_index();
		}

	}

	public function hse_bking_rejection($hb_house_id)
	{
		if($this->session->has_userdata('email'))
		{
			$confirmation=array('hb_status'=>'Rejected');
			$this->load->model('Vendor_model');
			$exe=$this->Vendor_model->hse_bking_cnfrmtion_model($hb_house_id,$confirmation);
			if($exe==1)
			{
				$waiting=array('h_status'=>'Waiting');
			$this->load->model('Vendor_model');
			$exe1=$this->Vendor_model->hse_waiting_model($hb_house_id,$waiting);
				if($exe1==1)
				
					{
							echo "<script>alert('Rejected')</script>";
							$this->vendor_house_userrequest();
						}
						else
						{
							echo "<script>alert('Try Again')</script>";
							$this->vendor_house_userrequest();
						}
				
			}
			else
						{
							echo "<script>alert('Try Again')</script>";
							$this->vendor_house_userrequest();
						}
		}
		else
		{
			$this->vendor_index();
		}
	}
	
	 public function vendor_profile()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Vendor_model');
			$profile['profile']=$this->Vendor_model->profile_fetch_model();
			$this->load->view('Vendor/Vendor_profile',$profile);
		}
		else
		{
			$this->vendor_index();
		}
	}
	public function vendor_profile_updation($vendor_id)
	{
		$name=$this->input->post('name');
        //$email=$this->input->post('email');
        $Phone=$this->input->post('phone');
        $password=$this->input->post('password');
        $occupation=$this->input->post('occupation');
        $Address=$this->input->post('address');
        $vendor_update=array('vndr_name'=>$name,'vndr_phone'=>$Phone,'vndr_password'=>$password,'vndr_address'=>$Address,'vndr_occupation'=>$occupation);
        $this->load->model('Vendor_model');
		$exe1=$this->Vendor_model->vendor_profile_updation_model($vendor_id,$vendor_update);
			if($exe1==1)
				
			{
				echo "<script>alert('Updated Successfully')</script>";
				$this->vendor_profile();
			}
			else
			{
				echo "<script>alert('Try Again')</script>";
				$this->vendor_profile();
			}
        
	}

	

	public function vendor_logout()
	{
		$this->session->sess_destroy();
    return redirect('Indexcontroller/index');
	}

	public function Vehicle_Exceed_Rent()
	{
		$this->load->model('Vendor_model');
			$Arrdata['vehicle']=$this->Vendor_model->Vehicle_Exceed_Rent_model();
			$this->load->view('Vendor/Vehicle_Exceed_Rent',$Arrdata);
	}

	public function House_Exceed_rent()
	{
		$this->load->model('Vendor_model');
			$Arrdata['house']=$this->Vendor_model->House_Exceed_Rent_model();
			$this->load->view('Vendor/House_Exceed_rent',$Arrdata);
	}







}