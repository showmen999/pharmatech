<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$this->load->model("admin_model");
        $data['all_medicine_data'] = $this->admin_model->all_medicine_data();
		$this->load->view('home',$data);
	}

	public function appointment_request(){
		$data = array();
		$this->load->model('Main_model');
		$data['make_appointment'] =$this->Main_model->make_appointment();

		$savedata["message"] = "Success";
		$this->session->set_userdata($savedata);
		redirect(base_url());
	}
	public function purchase_medicine(){
		$data = array();
		$this->load->model("main_model");
		$data['purchase_medicine'] = $this->Main_model->purchase_medicine();

		$savedata["purchase_message"] = "Success";
		$this->session->set_userdata($savedata);
		redirect(base_url());
	}
	public function contact_us(){
		$data = array();
		$this->load->model("main_model");
		$data['contact_us'] = $this->Main_model->contact_us();

		$savedata["contact_us"] = "Success";
		$this->session->set_userdata($savedata);
		redirect(base_url());
	}

	public function admin(){
		$this->load->view('admin_login');
	}


	public function admin_lgin_koreche(){
		// echo "ok";
		$this->load->view('dashboard_home');
	}

	public function dashboard(){
		$this->load->view('dashboard_home');
	}


}
