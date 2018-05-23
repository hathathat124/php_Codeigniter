<?php if(!defined("BASEPATH")) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of start
 *
 * @author Server
 */
class start extends CI_Controller{
    
    
    public function __construct(){
        parent::__construct();
        $this->load->model('member_model');
    }
    public function insert()
    {
        $this->load->view("insert_view");
    }
    public function insert2(){
        $this->form_validation->set_rules('fname', 'ชื่อ','required');
        $this->form_validation->set_rules('lname','นามสกุล','required');
        $this->form_validation->set_message('required','ERROR : กรุณาป้อน %s');
        
        if($this->form_validation->run() == false)
        {
            $this->load->view('insert_view');
        }
        else{
            if($this->member_model->insert() ==true){
                $data['result']=" add data success";

            }
            else{
                $data['result']=" add data failed";
            }
            $this->load->view('insert_view2',$data);
        }
    }
    public function delete(){
        if($this->member_model->delete()== TRUE)
        {
            $data['result']="ลบข้อมูลเรียบร้อยแล้ว";
        }
        else{
            $data['result']="Can't delete data";
        }
        $this->load->view('delete_view');
    }
    
    public function index(){
        $data['query']= $this->member_model->all();
        $this->load->view('home_view',$data);
    }
    //put your code here
}
