<?php if(!defined("BASEPATH"))exit('No direct script access allowed');
class Form extends CI_Controller {
    public function index(){
        @$this->load->view('form_view');
    }
    public function check()
    {
        //message thai set validate
        $this->form_validation->set_message('required','กรุณาใส่ข้อมูล%s');
        $this->form_validation->set_message('min_lenght','%sข้อมูลจะต้องมีอย่างน้อย 6 ตัวอักษร');
        
        $this->form_validation->set_message('matches','ข้อมูล %s ไม่ตรงกันกับ %s');
        $this->form_validation->set_message('valid_email','%s ไม่เป็นไปตามรูปแบบ Email');

        
        
        
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
