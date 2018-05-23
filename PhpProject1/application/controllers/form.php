<?php if(!defined("BASEPATH"))exit('No direct script access allowed');
class Form extends CI_Controller {
    public function index(){
        @$this->load->view('form_view');
    }
    public function check()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        
        $this->form_validation->set_rules('passconf','Password Confirmation','required|matches[password]');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('form_view');
            
        } else{
            $this->load->view('form_view2');
        }
    }
}
