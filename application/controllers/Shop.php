<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function index() {
        $data['title'] = 'Shop';
        $data['content'] = $this->load->view('content/view_shop', [], true);
        $this->load->view('layouts/template', $data);
    }
}
