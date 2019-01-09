<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/search
	 *	- or -
	 * 		http://example.com/index.php/search/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        //$this->load->model('Login_model');
        $this->load->library('session');
    }

	public function index()
	{
		echo $_GET['search'];
		//echo "search results will be displayed here with appropriate links!";


		$this->load->view('result_view');
		
	}

	public function test()
	{
		echo "test";
		//die;
	}

	public function index2()
	{
		$this->load->view('index');
	}

}
