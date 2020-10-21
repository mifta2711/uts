<?php
	class Contact extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
		}
		
	public function index()
	{

		$data['title'] = 'Contact';
		$data['page'] = '';
        $this->load->view('contact',$data);
	}

}