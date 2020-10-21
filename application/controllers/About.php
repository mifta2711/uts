<?php
	class About extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
		}

	public function index()
	{

		$data['title'] = 'About My Website';
		$data['page'] = 'Perkenalkan Nama saya Miftahul Rohmah kegiatan saya selain kuliah di STIKI saya juga bekerja di SMA N 5 Malang  ';
        $this->load->view('about',$data);
	}
}