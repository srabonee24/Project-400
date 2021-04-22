<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 
	public function index()
	{

		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');
	 
 
		if ($this->form_validation->run() == FALSE) {


		
		$this->load->view('inc/header');
		$this->load->view('pages/login');
		$this->load->view('inc/footer');

		}else{


			$result=$this->db->where('email',$this->input->post('Email'))->where('password',$this->input->post('Password'))->get('tbl_user')->result_array();

			if($result){


				$sdata['email']=$result[0]['email'];
				$sdata['name']=$result[0]['name'];
				$sdata['id']=$result[0]['id'];
				$sdata['type']=$result[0]['type'];

				$this->session->set_userdata($sdata);

				if($result[0]['type']=='admin'){

						redirect('Admin');

				}else{

					redirect('Welcome');
				}

			
			}else{


			$message='<div class="alert alert-danger">Wrong Username or Password</div>';

			$this->session->set_flashdata('message',$message);


					redirect('Login');
			}
			




		}


	}	
	
	
	
	
}
