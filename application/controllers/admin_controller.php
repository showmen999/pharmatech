<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index(){
		$this->load->view('admin_login');
	}


	public function admin_login(){
        $admin_email = $this->input->post('admin_email',true);
        $admin_passwprd = $this->input->post('admin_password',true);

        $this->load->model('admin_model');
        $result = $this->admin_model->admin_login_control($admin_email,$admin_passwprd);

        $sdata = array();

        if($result){
			
			$sdata['admin_name']=$result->admin_name;

			$this->session->set_userdata($sdata);
			redirect('dashboard');
		}
		else{
			
			$sdata['pt_message']="Your Email or Password Invalid";
			$this->session->set_userdata($sdata);
			redirect('admin_controller');
		}
    }
    
    public function logout(){
        
		$this->session->unset_userdata('admin_name');
		$sdata['pt_message'] = "Logout Successfully!";
		$this->session->set_userdata($sdata);
		redirect('admin_controller');
    }


    public function admin_register_form(){
        $this->load->view('admin_signup');
    }

    public function admin_signup_control(){
        $data=array();
        $this->load->model('admin_model');
        $data['admin_signup_info'] = $this->admin_model->admin_signup_info();
        redirect('admin_controller');
    }


	public function dashboard(){
        $data = array();
        $this->load->model('admin_model');
        $data['all_admin']= $this->admin_model->all_admin();
        $data['c_appoint'] = $this->admin_model->c_appoint();
		$data['c_order'] = $this->admin_model->c_order();
		$data['c_medicine'] = $this->admin_model->c_medicine();
		$data['c_contact'] = $this->admin_model->c_contact();
        $data['admin_content'] = $this->load->view('admin_pages/dashboard_index',$data,true);
		$this->load->view('dashboard_home',$data);
    }

    
    public function add_medicine(){
        $data = array();
        $data['admin_content'] = $this->load->view('admin_pages/add_medicine','',true);
		$this->load->view('dashboard_home',$data);
    }
   public function manage_medicine(){
        $data = array();
        $this->load->model("admin_model");
        $data['all_medicine_data'] = $this->admin_model->all_medicine_data();
        $data['admin_content'] = $this->load->view('admin_pages/manage_medi',$data,true);
		$this->load->view('dashboard_home',$data);
    }


    public function save_medicine(){
        $data = array();
        $this->load->model("admin_model");
        $data['save_medicine_info'] = $this->admin_model->save_medicine_info();
        $savedata["msg"] = "success";
        $this->session->set_userdata($savedata);
        redirect('add-medcine');

        
    }

    public function appoint_table(){
        $data = array();
        $this->load->model('admin_model');
        $data['all_appoint'] = $this->admin_model->all_appoint();
        $data['admin_content'] = $this->load->view('admin_pages/manage_appoint',$data,true);
		$this->load->view('dashboard_home',$data);
    }
    
    public function medicine_table(){
        $data = array();
        $this->load->model('admin_model');
        $data['all_medicine'] = $this->admin_model->all_medicine();
        $data['admin_content'] = $this->load->view('admin_pages/manage_purchase_medi',$data,true);
		$this->load->view('dashboard_home',$data);
    }
    public function contact(){
        $data = array();
        $this->load->model('admin_model');
        $data['all_contact'] = $this->admin_model->all_contact();
        $data['admin_content'] = $this->load->view('admin_pages/contact_manage',$data,true);
		$this->load->view('dashboard_home',$data);
    }


    public function edit_medicine($medicine_id){
        $data = array();
        $this->load->model("admin_model");
        $data['all_medicine_by_id'] = $this->admin_model->all_medicine_by_id($medicine_id);
        $data['admin_content'] = $this->load->view('admin_pages/edit_medicine',$data,true);
		$this->load->view('admin_pages/edit_medicine',$data);

    }
    public function delete_medicine($medicine_id){
        $data = array();
        $this->load->model("admin_model");
        $data['delete_medicine'] = $this->admin_model->delete_medicine($medicine_id);
        $savedata["message"] = "Deleted Success";
		$this->session->set_userdata($savedata);
        redirect('manage-medicine');

    }
    public function edit_medi_by_id(){
        $data = array();
        $this->load->model("admin_model");
        $data['update_medi'] = $this->admin_model->update_medi();
        $savedata["message"] = "Update Success";
		$this->session->set_userdata($savedata);
        redirect('manage-medicine');
    }
    public function check_sts(){

        if(isset($_REQUEST['cval'])){
            $this->load->model("admin_model");
            $data['update_check'] = $this->admin_model->update_check();
            redirect('appoint-table');
        }
    }
    public function check_purchase(){

        if(isset($_REQUEST['cval'])){
            $this->load->model("admin_model");
            $data['update_check_purchase'] = $this->admin_model->update_check_purchase();
            redirect('medicine-table');
        }
    }


}
