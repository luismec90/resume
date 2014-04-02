<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class App extends CI_Controller {

    public function index() {
        $content = date("y-m-d H:i:s");
        $fp = fopen("myText.txt", "w+");
        fwrite($fp, $content);
        fclose($fp);
        echo "Hola mundo, son las ".$content;
    }

}
