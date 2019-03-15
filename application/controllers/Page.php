<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();

    $this->load->helper('url');

    if($this->session->userdata('logged_in') !== TRUE){
      redirect('Home');
    }
    
  }

  function admin(){
    
      if($this->session->userdata('user_role')==='admin'){

          $data['content'] = 'Content/home';
          $this->load->view('Template/dashboard',$data);
          
      }else{
          echo "Access Denied";
      }
 
  }
 
  function customerservice(){
    
      if($this->session->userdata('user_role')==='customer service'){
          
          $data['content'] = 'Content/home';
          $this->load->view('Template/dashboard',$data);
      }else{
          echo "Access Denied";
      }
  }

  function dashboard(){

    if($this->session->userdata('user_role')==='admin')
    {
      $this->admin();
    }else if($this->session->userdata('user_role')==='customer service')
    {
      $this->customerservice();
    }

  }

  function input_supplier(){

    $data['content'] = 'Content/input_supplier';
    $this->load->view('Template/dashboard',$data);
  }


 
}