<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model
{
public function log_vendor($vendor_log)
	{

	$this->db->where($vendor_log);
	return $this->db->count_all_results('vendor');

	}

	public function vendor_catinsrt_model($add)
	{
		return $this->db->insert('category',$add);
	}
	public function category_alrdy_model($category)
	{
		$this->db->where('category_name',$category);
		return $this->db->count_all_results('category');

	}
	public function category_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('category');
		return $this->db->get()->result();

	}
	public function view_edit_category_model($category_id)
	{
		$this->db->where('category_id',$category_id);
		$this->db->select('*');
		$this->db->from('category');
		return $this->db->get()->result();
	}
	public function delete_category($category_id)
		{
		$this->db->where('category_id',$category_id);
		return $this->db->delete('category');
		}
	public function vendor_vehinsrt_model($add)
	{
		return $this->db->insert('vehicle',$add);
	}
	public function vehicle_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('vehicle');
		$this->db->where('v_verify_rent','Approved');
		return $this->db->get()->result();

	}
	public function vendor_myprofile()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vendor');
		$this->db->where('vndr_email',$email);
		return $this->db->get()->result();
	}

	public function vendor_vehicle_userrequest_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vehicle_booking');
		$this->db->join('vehicle','vehicle.vehicle_id=vehicle_booking.vb_vehicleid');
		$this->db->join('user','user.user_id=vehicle_booking.vb_userid');
		$this->db->where('vb_vendor_email',$email);
		return $this->db->get()->result();
	}

	public function veh_bking_cnfrmtion_model($vb_vehicleid,$confirmation)
	{
		$email=$this->session->userdata('email');
		$this->db->where('vb_vendor_email',$email);
		$this->db->where('vb_vehicleid',$vb_vehicleid);
		return $this->db->update('vehicle_booking',$confirmation);
	}

	public function veh_waiting_model($vb_vehicleid,$waiting)
	{
		$this->db->where('vehicle_id',$vb_vehicleid);
		return $this->db->update('vehicle',$waiting);
	}
	public function edits_vendor_model($edits_cat,$house_id)
	{
		$this->db->where('house_id',$house_id);
		return $this->db->update('house',$edits_cat);
	}

	public function vendor_hseinsrt_model($add)
	{
		return $this->db->insert('house',$add);
	}

	public function vendor_house_userrequest_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('house_booking');
		$this->db->join('house','house.house_id=house_booking.hb_house_id');
		$this->db->join('user','user.user_id=house_booking.hb_user_id');
		$this->db->where('hb_vendor_email',$email);
		return $this->db->get()->result();
	}
	public function veh_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vehicle');
		$this->db->join('vendor','vendor.vendor_id=vehicle.v_vendor_id');
		$this->db->where('vendor.vndr_email',$email);
		$this->db->join('category','vehicle.v_category_id=category.category_id');
		return $this->db->get()->result();
	}
	public function vehicle_delete_model($vehicle_id)
	{
		$this->db->where('vehicle_id',$vehicle_id);
		return $this->db->delete('vehicle');
	}

	public function vehicle_edit_model($vehicle_id)
	{
		
		$this->db->select('*');
		$this->db->from('vehicle');
		
		$this->db->where('vehicle_id',$vehicle_id);
		
		return $this->db->get()->result();
	}
	public function house_edit_model($house_id)
	{
		$this->db->select('*');
		$this->db->from('house');
		
		$this->db->where('house_id',$house_id);
		
		return $this->db->get()->result();
	}
	public function vehicle_update_model($result,$vehicle_id)
	{
		
		$this->db->where('vehicle_id',$vehicle_id);
		return $this->db->update('vehicle',$result);

	}

	public function house_delete_model($house_id)
	{
		$this->db->where('house_id',$house_id);
		return $this->db->delete('house');
	}
	public function house_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('house');
		$this->db->where('h_vendor_email',$email);
		$this->db->join('category','house.h_category_id=category.category_id');
		return $this->db->get()->result();
	}


	public function hse_bking_cnfrmtion_model($hb_house_id,$confirmation)
	{
		$email=$this->session->userdata('email');
		$this->db->where('hb_vendor_email',$email);
		$this->db->where('hb_house_id',$hb_house_id);
		return $this->db->update('house_booking',$confirmation);
	}
	public function hse_waiting_model($hb_house_id,$waiting)
	{
		$this->db->where('house_id',$hb_house_id);
		return $this->db->update('house',$waiting);
	}

	public function edits_categoryy_model($edits_cat,$category_id)
	{
		$this->db->where('category_id',$category_id);
		return $this->db->update('category',$edits_cat);

	}

	public function profile_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vendor');
		$this->db->where('vndr_email',$email);
		return $this->db->get()->result();
	}
	public function vendor_profile_updation_model($vendor_id,$vendor_update)
	{
		
		$this->db->where('vendor_id',$vendor_id);
		return $this->db->update('vendor',$vendor_update);
		
	}

	public function Vehicle_Exceed_Rent_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('vehicle');
		$this->db->join('vendor','vehicle.v_vendor_id=vendor.vendor_id');
		$this->db->join('category','vehicle.v_category_id=category.category_id');
		$this->db->where('vndr_email',$email);
		return $this->db->get()->result();
	}

	public function House_Exceed_Rent_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('house');
		$this->db->join('vendor','house.h_vendor_id=vendor.vendor_id');
		$this->db->join('category','house.h_category_id=category.category_id');
		$this->db->where('h_vendor_email',$email);
		return $this->db->get()->result();
	}

	

	



















}