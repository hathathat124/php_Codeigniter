<?php if(! defined("BASEPATH")) exit('No direct script access allowed');

class url extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('url_view');
        
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

