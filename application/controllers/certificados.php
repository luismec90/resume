<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Certificados extends CI_Controller {

    public function index() {
        $this->load->view('certificados_view');
    }

}
