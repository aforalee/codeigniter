<?php
/**
 * Created by PhpStorm.
 * User: alihu
 * Date: 6/30/2016
 * Time: 11:32 PM
 */
Class Users_class extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_user($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }

        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }
}


