<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getOffices()
    {
        $this->db->select('city,phone,state,country');
        $this->db->where('country', 'USA');
        $query = $this->db->get('offices');
        return $query->result_array();
    }

    public function insertOffice($data)
    {
        return $this->db->insert('offices', $data);
    }

    public function insertOffices($data)
    {
        $this->db->trans_start();
        $this->db->insert_batch('offices', $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
            # Everything is Perfect.
            # Committing data to the database.
            $this->db->trans_commit();
            return true;
        }
    }

}
