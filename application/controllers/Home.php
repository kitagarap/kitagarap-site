<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->model('HomeModel');
    }

    public function index() {
        $data['service'] = $this->HomeModel->get_service();
        $data['team'] =  $this->HomeModel->get_team();
        $data['portfolio'] =  $this->HomeModel->get_portfolio();

        $this->load->view('public/home', $data);
    }
}

