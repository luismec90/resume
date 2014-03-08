<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {
        $this->load->model("user_model");

        $data["tab"] = "inicio";
        $data["css"] = array("css/inicio");
        $data["js"] = array("js/inicio");
        $data["users"] = $this->user_model->getUsers();

        $this->load->view('include/header', $data);
        $this->load->view('inicio_view');
        $this->load->view('include/footer');
    }

}
