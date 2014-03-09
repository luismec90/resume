<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mail extends CI_Controller {

    public function index() {
        if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])) {
            echo "error";
        } else {
            $subject = utf8_decode("Mensaje luisfer.co");
            $message = "Nombre: {$_POST["name"]} Email: {$_POST["email"]} Mensaje:{$_POST["message"]}";
          mail("luismec90@gmail.com", $subject, utf8_decode($message));
            echo "success";
        }
    }

}
