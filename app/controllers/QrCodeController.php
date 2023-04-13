<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//use CodeIgniter\Controller;

class QrCodeController extends CI_Controller {

    public function index()
{
    $this->load->library('ciqrcode');

    $params['data'] = 'http://localhost/menuController/';
    $params['level'] = 'H';
    $params['size'] = 10;
    $params['savename'] = FCPATH.'res/qrcodes/qrCode_'.time().".png";
    $params['quality'] = 100;
    $params['color'] = array(255, 0, 0);
    $params['bgcolor'] = array(255, 255, 255);

    $this->ciqrcode->generate($params);

    // Load view with QR code image
    $data['qr_code_image'] = base_url('res/qrcodes/qrCode_'.time().".png");
    $this->load->view('qrcode', $data);
}


}
