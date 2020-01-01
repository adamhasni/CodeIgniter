<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_Model extends CI_Model {
    public function __Construct(){
       $this->load->database(); 
    }

    function createData(){
        $data = array (
            'lastName' => $this->input->post('lastName'),
            'firstName' => $this->input->post('firstName'),
            'birthDate' => $this->input->post('birthDate'),
            'contactNo' => $this->input->post('contactNo'),
            'bio' => $this->input->post('bio')
        );
        $this->db->insert('table_name',$data);
    }

    function getAllData(){
        // $query = $this->db->query('SELECT * FROM table_name');
        $query = $this->db->from('table_name');
        return $query->result();
    }

    function getData($id){
        $query = $this->db->query('SELECT*FROM table_name WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id){
        $data = array (
            'lastName' => $this->input->post('lastName'),
            'firstName' => $this->input->post('firstName'),
            'birthDate' => $this->input->post('birthDate'),
            'contactNo' => $this->input->post('contactNo'),
            'bio' => $this->input->post('bio')
        );
        $this->db->where('id', $id);
        $this->db->update('table_name', $data);
    }

    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('table_name');
    }
}
