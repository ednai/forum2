<?php
    class Questao extends CI_Model {
        
        function get($id=null) {
            if($id){
                $this->db->where('Id', $id);
                $query = $this->db->get('tb_questao');
                return $query->row_array();
            }else{
                $query = $this->db->get('tb_questao');
                return $query->result_array();
            }
        }
    }
