<?php
    class M_mahasiswa extends CI_Model{
        
        function get_data()
        {
            //return $this->db->get('tbl_daftarrapat')->result_array;
            $query = $this->db->query("SELECT * from tbl_mahasiswa");
            return $query->result();
            //print_r($query);
            //die();
        }
    }
?>