<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/home');
		$this->load->view('inc/footer');
	}
	public function page0()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/page0');
		$this->load->view('inc/footer');
		
		
	}
	public function about()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/about');
		$this->load->view('inc/footer');
	}
	public function gallery()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/gallery');
		$this->load->view('inc/footer');
	}
	public function pricing()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/pricing');
		$this->load->view('inc/footer');
	}
	public function faq()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/faq');
		$this->load->view('inc/footer');
	}
	public function contact()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/contact');
		$this->load->view('inc/footer');
	}
		public function signup()
	{	
		
		$data['title']='Sign up';

		$this->form_validation->set_rules('name', 'name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('address', 'address', 'required|regex_match[/^[a-zA-Z]/]');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		$this->form_validation->set_rules('blood_group', 'blood_group','required|validate_blood');
		$this->form_validation->set_rules('date_birth', 'date_birth', 'required');
		$this->form_validation->set_rules('fathers_name', 'fathers_name','required');
		$this->form_validation->set_rules('mother_name', 'mother_name','required' );
		$this->form_validation->set_rules('mobile', 'mobile','required');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'confirm password', 'required|matches[password]');
		
		
			$this->form_validation->set_message('validate_blood', 'The %s is Invalid');
	
		function validate_blood($var){

			if($var=='O+'||$var=='A+'||$var=='B+'||$var=='AB+'||$var=='O-'||$var=='B-'||$var=='AB-'||$var=='A-'){
					return true;
			    }else{

			    	return false;
			    }


		}
		
		
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('pages/signup',$data);
		}
		else
		{
			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['address']=$this->input->post('address');
			$idata['gender']=$this->input->post('gender');
			$idata['date_birth']=$this->input->post('date_birth');
			$idata['blood_group']=$this->input->post('blood_group');
			$idata['fathers_name']=$this->input->post('fathers_name');
			$idata['mother_name']=$this->input->post('mother_name');
			$idata['mobile']=$this->input->post('mobile');
			$idata['Password']=$this->input->post('password');
			$idata['type']='user';
			

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	
	}
	      
}

	
	

