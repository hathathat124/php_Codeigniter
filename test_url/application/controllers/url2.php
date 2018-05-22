<?php if(! defined("BASEPATH")) exit('No direct script access allowed');

class url2 extends CI_Controller{
    //put your code here
    public function index(){
        @$this->load->helper(url);
        $this->load->view('url_view2');
    }
}
