<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function make_appointment(){
        $data = array();

        $data['name'] = $this->input->post('name',true);
        $data['phone'] = $this->input->post('phone',true);
        $data['email'] = $this->input->post('email',true);
        $data['date'] = $this->input->post('date',true);
        $data['doctor'] = $this->input->post('doctor',true);

        $this->db->insert('appoint_info',$data);
    }


    public function purchase_medicine(){
        $data = array();
//buyer_medicine
        $data['buyer_name'] = $this->input->post('buyer_name',true);
        $data['buyer_contact'] = $this->input->post('buyer_contact',true);
        $data['date'] = $this->input->post('date',true);
        $data['buyer_address'] = $this->input->post('buyer_address',true);
        $data['buyer_medicine'] = $this->input->post('buyer_medicine',true);


                $sdata = array();
                $error ="";
                $config['upload_path'] = 'images/prescription/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '1000000';
                $config['width'] = '3000';
                $config['height'] = '3000';
                $this->load->library('upload',$config);

                if (!$this->upload->do_upload('patient_prescrip')) {
                    $error = $this->upload->display_errors();
        
                } 
                else {
                    $sdata =  $this->upload->data();
                    $data['patient_prescrip'] = $config['upload_path'].$sdata['file_name'];
                }

                $this->db->insert('purchase_medicine',$data);
    }
    public function contact_us(){
       // cnt_name	cnt_email	cnt_number	cnt_msg
       $data = array();

       $data['cnt_name'] = $this->input->post('cnt_name',true);
       $data['cnt_email'] = $this->input->post('cnt_email',true);
       $data['cnt_number'] = $this->input->post('cnt_number',true);
       $data['cnt_msg'] = $this->input->post('cnt_msg',true);
       $this->db->insert('contact_info',$data);

    }
}
