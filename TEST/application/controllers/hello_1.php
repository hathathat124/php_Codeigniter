<?php if (! defined('BASEPATH'))exit('No direct script access allowed');



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class hello_1 extends CI_Controller
{
    public function index(){
        echo "<h3>Hellow Word</h3>";
        $data['title'] = "Hellow World";
        $data['content']="Hellow World : Code ig FRAMWORK";
        $data['url']="http://ellislab.com/codeigniter";
        $this->load->view('hello_view_1',$data);
    }
}