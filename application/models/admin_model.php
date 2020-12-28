<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

    public function admin_login_control($admin_email,$admin_password){
        $this->db->select('*');
        $this->db->from('admin_info');
        $this->db->where('admin_email', $admin_email);
        $this->db->where('admin_password', $admin_password);

        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }

    public function admin_signup_info(){

                
            $data = array();

            $data['admin_name'] = $this->input->post('admin_name',true);
            $data['admin_email'] = $this->input->post('admin_email',true);
            $data['admin_password'] = $this->input->post('admin_password',true);
            $data['admin_number'] = $this->input->post('admin_number',true);

            $this->db->insert('admin_info',$data);
    }

    public function save_medicine_info()
    {
        $data = array();
        $data['medicine_name'] = $this->input->post('medicine_name',true);
        $data['medicine_generic_name'] = $this->input->post('medicine_generic_name',true);
        $data['medicine_strength'] = $this->input->post('medicine_strength',true);
        $data['price'] = $this->input->post('price',true);

        $this->db->insert('medicine_list',$data);

    }
    public function all_medicine_data(){
        $this->db->select("*");
        $this->db->from('medicine_list');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }
    public function all_medicine_by_id($medicine_id){
        $this->db->select("*");
        $this->db->from('medicine_list');
        $this->db->where('medicine_id',$medicine_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }
    public function delete_medicine($medicine_id){
        $this->db->where('medicine_id', $medicine_id);
        $this->db->delete('medicine_list');
    }
    public function update_medi(){
        $data = array();
        $medicine_id = $this->input->post('medicine_id',true);
        $data['medicine_name'] = $this->input->post('medicine_name',true);
        $data['medicine_generic_name'] = $this->input->post('medicine_generic_name',true);
        $data['medicine_strength'] = $this->input->post('medicine_strength',true);
        $data['price'] = $this->input->post('price',true);

        $this->db->where('medicine_id',$medicine_id);
        $this->db->update('medicine_list',$data);


    }

    public function all_appoint()
    {
        $this->db->select('*');
        $this->db->from('appoint_info');
        $que = $this->db->get();
        $appoint_data = $que->result();
        return $appoint_data;
    }
    public function all_contact()
    {
        $this->db->select('*');
        $this->db->from('contact_info');
        $que = $this->db->get();
        $contact_data = $que->result();
        return $contact_data;
    }
    public  function all_medicine()
    {
        $this->db->select('*');
        $this->db->from('purchase_medicine');
        $que = $this->db->get();
        $medicine_data = $que->result();
        return $medicine_data;
    }
    public  function update_check()
    {
        $id = $_REQUEST['cid'];
        $cval = $_REQUEST['cval'];
        if($cval == 0){
            $chk = 1;
        }
        $data = array('status'=>$chk);
        $this->db->where('id',$id);
        return $this->db->update('appoint_info',$data);
    }
    public  function update_check_purchase()
    {
        $id = $_REQUEST['cid'];
        $cval = $_REQUEST['cval'];
        if($cval == 0){
            $chk = 1;
        }
        $data = array('status'=>$chk);
        $this->db->where('id',$id);
        return $this->db->update('purchase_medicine',$data);
    }

    public function c_appoint(){
        $this->db->SELECT('*');
        $this->db->FROM('appoint_info');
        $query_result = $this->db->get();
        $appoint =$query_result->num_rows();
        return $appoint;
    }
    public function c_order(){
            $this->db->SELECT('*');
            $this->db->FROM('purchase_medicine');
            $query_result = $this->db->get();
            $order =$query_result->num_rows();
            return $order;
    }
    public function c_medicine(){
            $this->db->SELECT('*');
            $this->db->FROM('medicine_list');
            $query_result = $this->db->get();
            $medi =$query_result->num_rows();
            return $medi;
    }
    public function c_contact(){
            $this->db->SELECT('*');
            $this->db->FROM('contact_info');
            $query_result = $this->db->get();
            $cont =$query_result->num_rows();
            return $cont;
    }
    public function all_admin(){
        $this->db->select('*');
        $this->db->from('admin_info');
        $que = $this->db->get();
        $res = $que->result();
        return $res;
    }
}