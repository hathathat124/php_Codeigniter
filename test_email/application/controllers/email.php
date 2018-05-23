<?php 
if(!defined("BASEPATH"))exit('No direct script access allowed');



class Email extends CI_Controller
{
    public function index(){ 
        @$this->load->view(form_view1);

    }
    public function send()
    {

        $this->form_validation->set_rules('to','To','required|valid_mail');

        $this->form_validation->set_rules('subject','Subject','required');
        $this->form_validation->set_rules('message','Message','required');
        
        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('form_view1');
        }
        else{
            $to= $this->input->post('to');
            $subject=$this->input->post('subject');
            $message= $this->input->post('message');
            
            $this->email->from('Adisak Chanmin');
            $this->email->to($to);
            
            $this->email->subject($subject);
            $this->email->message($message);
            
            if($this->email->send())
            {
                $data['result']="สง Email ได้เรียบร้อยแล้ว";
                $this->load->view("success',$data");
            }
            else{
                $data['resualt']=" Can't Send Email";
                $this->load->view('success',$data);
            }
        }
        
        
    }

    

}
