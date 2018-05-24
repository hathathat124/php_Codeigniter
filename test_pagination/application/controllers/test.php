<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author Server
 */
class test extends CI_Controller{
    //put your code here
    public function index(){
        $sql ="select * from tb_data order by id";
        $data['query']=$this->db->query($sql);
        $this->load->view('test_view',$data);
    }
}
