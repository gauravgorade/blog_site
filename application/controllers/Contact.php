<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Contact_model');
        $this->load->model('Admin_model');
      
      
        
    }
    

    

  
    
    public function view_contact()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {

            $admin_type = $this->session->userdata('admin_type');
            if ($admin_type =='1' || $admin_type =='2' || $admin_type =='4') {
                $data['result']=$this->Contact_model->getabd_contact();
                $this->load->view("admin/contact_view", $data);
            } else {
                $this->session->set_flashdata('error', 'Permission Restricted to open Admin data ');
                redirect(base_url(). 'admin/');
            }
           
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
    

    public function delete_contact($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $this->Contact_model->delete_id($t_id);
            $this->session->set_flashdata('success', 'Contact Delete successfully');
            $responce['html'] =' Contact Deleted successfully';
            echo json_encode( $responce);
            // redirect(base_url().'Contact/view_contact');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function view_details($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('c_status' => '0' );
            $this->Contact_model->update_data($data,$t_id);
            
            $data['result'] = $this->Contact_model->get_single_data($t_id);
            $this->load->view('admin/contact_details', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function export()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            if ($this->input->post('daterangepicker2') != Null)
            {
                $daterangepicker = date('Y-m-d',strtotime($this->input->post('daterangepicker')));
                
                $daterangepicker2 =date('Y-m-d',strtotime($this->input->post('daterangepicker2')));
                
                $sel_msg= "Data Shown Form date $daterangepicker TO  $daterangepicker2";
                
                $this->session->set_flashdata('export_msg',$sel_msg);
                
                $query6= $this->db->query("SELECT * FROM `contact_inquiry` WHERE c_date
                BETWEEN '$daterangepicker' AND '$daterangepicker2'");
                $data['result'] =$query6->result();
                
            } else
            {
                $query6= $this->db->query("SELECT * FROM `contact_inquiry` WHERE c_status='1'");
                $data['result'] =$query6->result();
                //$data['result']=$this->Inquiry_model->getnew_inquiry();
            }
            $this->load->view("admin/contact_export", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
   
    

    
    
    
}
 ?>