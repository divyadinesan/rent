<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function log_admin($admin_log)
	{

	$this->db->where($admin_log);
	return $this->db->count_all_results('admin');

	}
	public function vndr_alrdy_model($email)
	{
		$this->db->where('vndr_email',$email);
		return $this->db->count_all_results('vendor');

	}
	public function admin_vendor_model($vendor_add)
	{
		return $this->db->insert('vendor',$vendor_add);
	}
	public function vendor_fetch_model($vendor_id)
	{
		$this->db->where('vendor_id',$vendor_id);
		$this->db->select('*');
		$this->db->from('vendor');
		return $this->db->get()->result();
	}
	// public function update_vendor_model($vendor_add,$vendor_id)
	// {
	// 	$this->db->where('vendor_id',$vendor_id);
	// 	return $this->db->update('vendor',$vendor_add);
	// }

	public function update_vendor_model($vendor,$vendor_id)
	{
		$this->db->where('vendor_id',$vendor_id);
		return $this->db->update('vendor',$vendor);
	}

	public function vehicle_payment_fetch_model()
	{
		
		$this->db->select('*');
		$this->db->from('vehicle_payment');
		$this->db->join('vehicle','vehicle_payment.pay_veh_id=vehicle.vehicle_id ');
		return $this->db->get()->result();
	}

	public function house_payment_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('house_payment');
		$this->db->join('house','house_payment.pay_hse_id=house.house_id');
		return $this->db->get()->result();
	}
	public function vendor_delete_model($vendor_id)
	{
		$this->db->where('vendor_id',$vendor_id);
		return $this->db->delete('vendor');
	}
	public function Adminadded_vendor_model()
	{
		$this->db->where('vndr_type','Admin');
		$this->db->select('*');
		$this->db->from('vendor');
		return $this->db->get()->result();
	}
	public function vendor_model()
	{
		$this->db->select('*');
		$this->db->from('vendor');
		return $this->db->get()->result();

	}
	public function user_model()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result();
	}
	public function user_fetch_model()
	{
		$email=$this->session->userdata('Email');
		$this->db->where('admin_email',$email);
		$this->db->select('*');
		$this->db->from('admin');
		return $this->db->get()->result();
	}
	public function admin_update_password_model($update)
	{
		// $email=$this->session->userdata('Email');
		// $this->db->where('admin_email',$email);
		return $this->db->update('admin',$update);
			
	}

	public function uservendor_fetch_model()
	{
		$this->db->where('vndr_status','Requested');
		$this->db->select('*');
		$this->db->from('vendor');
		return $this->db->get()->result();
	}
	public function vendor_approve_model($vendor_id,$approve)
	{
		$this->db->where('vendor_id',$vendor_id);
		return $this->db->update('vendor',$approve);
	}

	public function vendor_reject_model($vendor_id,$reject)
	{
		$this->db->where('vendor_id',$vendor_id);
		return $this->db->update('vendor',$reject);
	}


	public function vehicle_booking_model()
	{
		$this->db->select('*');
		$this->db->from('vehicle_booking');
		$this->db->join('user','vehicle_booking.vb_userid=user.user_id');
		$this->db->join('vendor','vehicle_booking.vb_vendor_id=vendor.vendor_id');
		$this->db->join('vehicle','vehicle_booking.vb_vehicleid=vehicle.vehicle_id');
		return $this->db->get()->result();
	}


	public function house_booking_model()
	{
		$this->db->select('*');
		$this->db->from('house_booking');
		$this->db->join('user','house_booking.hb_user_id=user.user_id');
		$this->db->join('vendor','house_booking.hb_vendor_id=vendor.vendor_id');
		$this->db->join('house','house_booking.hb_house_id=house.house_id');
		return $this->db->get()->result();
	}

	public function Admin_fech_vehicle_model()
	{
		$this->db->select('*');
		$this->db->from('vehicle');
		
		$this->db->join('vendor','vehicle.v_vendor_id=vendor.vendor_id');
		$this->db->join('category','vehicle.v_category_id=category.category_id');
		return $this->db->get()->result();
	}

	public function rent_verify_model($vehicle_id,$Verify)
	{
		 $this->db->where('vehicle_id',$vehicle_id);
		return $this->db->update('vehicle',$Verify);
	}

	public function Admin_fech_house_model()
	{

		$this->db->select('*');
		$this->db->from('house');
		$this->db->join('vendor','house.h_vendor_id=vendor.vendor_id');
		$this->db->join('category','house.h_category_id=category.category_id');
		return $this->db->get()->result();
	}
	public function house_rent_verify_model($house_id,$Verify)
	{
		$this->db->where('house_id',$house_id);
		return $this->db->update('house',$Verify);
	}














}