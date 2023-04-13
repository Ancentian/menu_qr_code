<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//use CodeIgniter\Controller;

class MenuController extends CI_Controller {

    public function index()
    {
        $this->load->view('menu');
    }

}
