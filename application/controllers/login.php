<?php
class Login extends CI_Controller {
	
	public function index() {
		$this->load->view('login_form');
	}

	public function submit() {

		if ($this->_submit_validate() === FALSE) {
			$this->index();
			return;
		}

		redirect('/');

	}

	private function _submit_validate() {

	}

}
