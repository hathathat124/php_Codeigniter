<?php if(! defined("BASEPATH")) exit('No direct script access allowed');
class html3 extends CI_Controller{
    public function index()
    {
        $this->load->helper('html');
        $this->load->view('html_view3');
    }
}
