<?php
	class Home extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
		}
		
	public function index()
	{

		$data['title'] = 'Selamat Datang Di Website Saya';
		$data['page'] = 'Hello teman teman , apa kabar ? Semoga kalian baik - baik saja yaa, dan jangan lupa bahagia ';
        $this->load->view('index',$data);
	}

}