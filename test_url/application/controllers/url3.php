<?php if(! defined("BASEPATH")) exit('No direct script access allowed');

class url3 extends CI_Controller
{
    public function  index()
    {
         @$this->load->helper(url);

         @$this->load->helper(html);
        $this->load->view('url_view3');
    }
}