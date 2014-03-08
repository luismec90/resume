<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getUsers() {
        $query = $this->db->get('user');
        return $query->result();
    }

}
