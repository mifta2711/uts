<?php
	class GuestBook extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
		}

	public function index()
	{

		$data['title'] = '';
		$data['page'] = '';
        $this->load->view('guestBook');
	}
}