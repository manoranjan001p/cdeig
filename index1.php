<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index1 extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->library('session');
		$this->load->view('index1header.php');
        $this->load->view('index1body.php');
	}

	public function reg()
	{
     $this->load->view("registration1.php");
	}

	public function registrationprocess(){
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['repassword']=$this->input->post('repassword');
        
		//print_r($data);

		$this->load->model("registration1");

        $status = $this->registration1->insert($data);

        if($status == true)
        {
			echo "registered successfullll";
            //$this->load->view("");//this for new page after registration create same page as index page and create name of registered person
        }

		else{
			echo "enter correct Details";
		}



	}

    public function log(){
        $this->load->view("login1.php");
    }

    public function login_process()
    {
        $data['username']=$this->input->post('username');
        
        $data['password']=$this->input->post('password');

        $this->load->model("registration1");

        $status = $this->registration1->log($data);

        if($status == true)
        {
			$this->load->library('session');
			$name=$data['username'];
			$this->session->set_userdata('savedata',$name);
			
			echo ($this->session->userdata('savedata'));

			echo "login successfully";
			$this->load->view('newone');
           //$this->load->view();//this for new page after registration create same page as index page and create name of registered person
        }
        else
        {
          echo "enter the correct details";
        }
        
    }

	public function userdetails(){
		$this->load->helper("url");
		$this->load->library("session");
		$response = $this->session->userdata('savedata');
		
		$this->load->model("registration1");
		$result = $this->registration1->userdetails($response); 
        echo $result;
		echo $response;
		print_r ($result[0]->username);


	}
}