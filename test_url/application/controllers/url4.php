<?php if(! defined("BASEPATH")) exit('No direct script access allowed');
class url4 extends CI_Controller
{
    public function  index()
    {
         @$this->load->helper(url);

         @$this->load->helper(html);
         $this->load->view('url_view4');
    }
}