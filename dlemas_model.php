<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dlemas_model extends CI_Model {
    
    public function save_form_data($data) {
        $this->db->insert('form_data', $data);
    }
    
}