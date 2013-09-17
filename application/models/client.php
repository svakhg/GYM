<?php

class Client extends CI_Model {
    
    function Client() {
        parent::__construct();
    }

    function getData() {
        $clients = $this->db->get('clients');

        return $clients->result();
    }

    function insert($data) {
        $this->db->set('name', $data['name']);
        $this->db->set('surname', $data['surname']);
        $this->db->set('ci', $data['ci']);
        $this->db->set('birth', $data['birth']);
        $this->db->set('address', $data['address']);
        $this->db->set('mail', $data['mail']);
        $this->db->set('emergency', $data['emergency']);
        $this->db->set('ocupation', $data['ocupation']);
        $this->db->insert('clients');
    }
}