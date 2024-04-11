<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

public function regi_model($reginsrt)
{
	return $this->db->insert('user',$reginsrt); 
}
public function already_regi_model($email)
{
	 $this->db->where('user_email',$email);
	 return $this->db->count_all_results('user');; 
}

public function login_model($logininsrt)
{

	$this->db->where($logininsrt);
	return $this->db->count_all_results('user');

}
public function user_fetch_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('user');
	$this->db->where('user_email',$email);
	return $this->db->get()->result();
}
public function category_fetch_model()
{
	
	$this->db->select('*');
	$this->db->from('user');
	return $this->db->get()->result();
}

public function vehicle_cid_fetch_model($catid)
	{
		$this->db->select('*');
		$this->db->from('vehicle');
			 $this->db->where('v_category_id',$catid);
			 $this->db->where('vehicle.v_verify_rent','Approved');
		return $this->db->get()->result();

	}
	public function vehicle_vid_fetch_model($veh_id)
	{
		$this->db->select('*');
		$this->db->from('vehicle');
		$this->db->join('vendor','vehicle.v_vendor_id=vendor.vendor_id');
			 $this->db->where('vehicle_id',$veh_id);
		return $this->db->get()->result();

	}
	public function house_review_model($add)
	{
		return $this->db->insert('house_review',$add);
	}
	public function vehicle_review_model($add)
{
	return $this->db->insert('vehicle_review',$add); 
}
	public function review_vehicle_fetch($veh_id)
	{
		$this->db->select('*');
		$this->db->from('vehicle_review');

		$this->db->where('veh_rev_vehicleid',$veh_id);
		return $this->db->get()->result();
	}

	public function review_house_fetch($house_id)
	{
		$this->db->select('*');
		$this->db->from('house_review');

		$this->db->where('house_id',$house_id);
		return $this->db->get()->result();
	}

	public function vehicle_booking_model($add)
	{
		return $this->db->insert('vehicle_booking',$add); 

	}
		

	public function already_vehbook_model($vehicle_id)
	{
		$email=$this->session->userdata('email');
			$this->db->where('vb_vehicleid',$vehicle_id);
			$this->db->where('vb_email',$email);
			return $this->db->count_all_results('vehicle_booking');

	}
	public function myvehicle_booking_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vehicle_booking');
		$this->db->join('vehicle','vehicle.vehicle_id=vehicle_booking.vb_vehicleid');
		$this->db->where('vb_email',$email);
		return $this->db->get()->result();
	}
	public function veh_book_cancel_model($vb_id)
	{
		$email=$this->session->userdata('email');
		$this->db->where('vb_email',$email);
		$this->db->where('vb_id',$vb_id);
		return $this->db->delete('vehicle_booking');

	}
	public function user_myprofile_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('user');
	$this->db->where('user_email',$email);
	return $this->db->get()->result();

}

public function user_prof_update_model($result)
{
	$email=$this->session->userdata('email');
	return $this->db->update('user',$result);


}

public function myvehicle_booking_details_model($vb_id)
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vehicle_booking');
		$this->db->join('vehicle','vehicle.vehicle_id=vehicle_booking.vb_vehicleid');
		$this->db->where('vb_email',$email);
		$this->db->where('vehicle_booking.vb_id',$vb_id);
		return $this->db->get()->result();
	}

	public function vehicle_payment_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('user');
	$this->db->join('vehicle_booking','vehicle_booking.vb_userid=user.user_id');
	$this->db->where('user_email',$email);
	return $this->db->get()->result();

}
public function veh_pay_insrt_model($result)
{
	return $this->db->insert('vehicle_payment',$result); 
}

public function myvehicle_payment_model($pay_veh_id,$paid)
{
		$this->db->where('vb_vehicleid',$pay_veh_id);
		return $this->db->update('vehicle_booking',$paid);
}
public function myvehicle_rending_model($pay_veh_id,$rending)
{
	$this->db->where('vehicle_id',$pay_veh_id);
		return $this->db->update('vehicle',$rending);
}
public function vehicle_invoice_model($veh_id)
{
	$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vehicle_payment');
		$this->db->join('vehicle_booking','vehicle_booking.vb_vehicleid=vehicle_payment.pay_veh_id');
		$this->db->join('user','vehicle_payment.pay_user_id=user.user_id');
		$this->db->join('vehicle','vehicle.vehicle_id=vehicle_payment.pay_veh_id');
		$this->db->where('vehicle_payment.pay_user_email',$email);
		$this->db->where('vehicle_payment.pay_veh_id',$veh_id);
		return $this->db->get()->result();
}
public function house_invoice_model($hb_house_id)
{
	$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('house_payment');
		$this->db->join('house_booking','house_booking.hb_house_id=house_payment.pay_hse_id');
		$this->db->join('user','house_payment.pay_user_id=user.user_id');
		$this->db->join('house','house.house_id=house_payment.pay_hse_id');
		$this->db->where('house_payment.pay_user_email',$email);
		$this->db->where('house_payment.pay_hse_id',$hb_house_id);
		return $this->db->get()->result();
}
public function vehicle_return_view_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('vehicle_booking');
	$this->db->join('vehicle','vehicle.vehicle_id=vehicle_booking.vb_vehicleid');
	$this->db->where('vehicle_booking.payment','Paid');
	$this->db->where('vb_email',$email);
	return $this->db->get()->result();
}
public function return_vehicle_model($vb_vehicleid)
{
	$email=$this->session->userdata('email');
		$this->db->where('vb_email',$email);
		$this->db->where('vb_vehicleid',$vb_vehicleid);
		return $this->db->delete('vehicle_booking');
}
public function vehicle_available_model($available,$vb_vehicleid)
{
	$this->db->where('vehicle_id',$vb_vehicleid);
		return $this->db->update('vehicle',$available);
}
public function vehicle_review_fetch_model($vb_vehicleid)
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('vehicle_booking');
	$this->db->join('vehicle','vehicle.vehicle_id=vehicle_booking.vb_vehicleid');
	$this->db->where('vehicle_booking.payment','Paid');
	$this->db->where('vehicle.vehicle_id',$vb_vehicleid);
	$this->db->where('vb_email',$email);

	return $this->db->get()->result();
}

public function house_review_fetch_model($house_id)
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('house_booking');
	$this->db->join('house','house.house_id=house_booking.hb_house_id');
	$this->db->where('house_booking.hb_payment','Paid');
	$this->db->where('house.house_id ',$house_id);
	$this->db->where('hb_user_email',$email);

	return $this->db->get()->result();
}



public function house_cid_fetch_model($catid)
	{
		$this->db->select('*');
		$this->db->from('house');
			 $this->db->where('h_category_id',$catid);
			 $this->db->where('house.h_verify_rent','Approved');
		return $this->db->get()->result();

	}

	public function house_hid_fetch_model($house_id)
	{
		$this->db->select('*');
		$this->db->from('house');
		$this->db->join('vendor','house.h_vendor_id=vendor.vendor_id');
			 $this->db->where('house_id',$house_id);
		return $this->db->get()->result();
	}

	public function already_hsebook_model($house_id)

	{
		$email=$this->session->userdata('email');
			$this->db->where('hb_house_id',$house_id);
			$this->db->where('hb_user_email',$email);
			return $this->db->count_all_results('house_booking');

	}


	public function house_booking_model($add)
	{
		return $this->db->insert('house_booking',$add);
	}

	public function myhouse_booking_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('house_booking');
		$this->db->join('house','house.house_id=house_booking.hb_house_id');
		$this->db->where('hb_user_email',$email);
		return $this->db->get()->result();
	}

	public function hse_book_cancel_model($hb_house_id)
	{
		$email=$this->session->userdata('email');
		$this->db->where('hb_user_email',$email);
		$this->db->where('hb_house_id',$hb_house_id);
		return $this->db->delete('house_booking');

	}

	 public function house_available_model($available,$hb_house_id)
	 {
	 	$this->db->where('house_id',$hb_house_id);
		return $this->db->update('house',$available);
	 }
	 public function house_payment_model()
	{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('user');
	$this->db->join('house_booking','house_booking.hb_user_id=user.user_id');
	$this->db->where('user_email',$email);
	return $this->db->get()->result();

	}
	public function hse_pay_insrt_model($result)
{
	return $this->db->insert('house_payment',$result); 
}


public function myhouse_payment_model($pay_hse_id,$paid)
{
		$this->db->where('hb_house_id',$pay_hse_id);
		return $this->db->update('house_booking',$paid);
}

public function myhouse_rending_model($pay_hse_id,$rending)
{

	$this->db->where('house_id',$pay_hse_id);
		return $this->db->update('house',$rending);
}
// public function myhouse_rent_model($pay_hse_id,$rem_amnt)
// {
// 	$this->db->where('hb_house_id',$pay_hse_id);
// 	return $this->db->update('house_booking',$rem_amnt);

// }
public function house_return_view_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('house_booking');
	$this->db->join('house','house.house_id=house_booking.hb_house_id');
	$this->db->where('house_booking.hb_payment','Paid');
	$this->db->where('hb_user_email',$email);
	return $this->db->get()->result();
}

public function return_house_model($hb_house_id)
{
		$email=$this->session->userdata('email');
		$this->db->where('hb_user_email',$email);
		$this->db->where('hb_house_id',$hb_house_id);
		return $this->db->delete('house_booking');
}


















}