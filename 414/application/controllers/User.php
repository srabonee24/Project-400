<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 
	public function index()
	{

		$data['title']='Show The Users List';


		$data['user']=$this->db->get('tbl_user')->result_array();

		$this->load->view('show-user',$data);
	}



	public function above()
	{

		$data['title']='Show The Users List who are above or equal 22';

	
		$data['user']=$this->db->where('age>=22')->get('tbl_user')->result_array();

		$this->load->view('show-user',$data);
	}


	public function below()
	{

		$data['title']='Show The Users List who are below 22';

	
		$data['user']=$this->db->where('age<22')->get('tbl_user')->result_array();

		$this->load->view('show-user',$data);
	}


	public function custom()
	{

		$data['title']='Like Function';

	
		// $data['user']=$this->db->like('blood_group', 'O','both')->get('tbl_user')->result_array();
		$data['user']=$this->db->like('name', 'm','both')->get('tbl_user')->result_array();

		$this->load->view('show-user',$data);
	}
}
