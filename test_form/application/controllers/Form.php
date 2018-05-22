<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->load->helper('form');
		$this->load->view('form_view1');
                
	}
        public function index2(){
              $this->load->helper('form');
              $this->load->view('form_view1');
                
        }
        
        public function send(){
            if($this->input->post('mysubmit')){
                $data=array(
                    "xinput" => $this->input->post('xinput'),
                    'xpassword' => $this->input->post('xpassword'),
                    'xtextarea'=> $this->input->post('xtextarea'),
                    'xradio'=> $this->input->post('xradio'),
                    'xcheckbox1'=> $this->input->post('xcheckbox1'),
                    'xcheckbox2'=> $this->input->post('xcheckbox2'),
                    'xdropdown'=> $this->input->post('xdropdown'),
                    'xhidden' => $this->input->post('xhidden'),
                );
                
            }
            $this->load->view("form_view2",$data);
        }
}