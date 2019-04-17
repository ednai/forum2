<?php
    class Postagem extends CI_Model {
        
        function get($id=null) {
            if($id){
                $this->db->where('id', $id);
                $query = $this->db->get('tb_questao');
                return $query->row_array();
            }else{
                $query = $this->db->get('tb_questao');
                return $query->result_array();
            }
        }
        
        function inserir($tb_questao) {
            return $this->db->insert('tb_questao', $tb_questao);
        }

        function listar($tb_questao) {
            $this->db->where('id', $tb_questao['id']);
            return $this->db->update('tb_questao', $tb_questao);
        }
        function editar($tb_questao) {
            $this->db->where('id', $tb_questao['id']);
            return $this->db->update('tb_questao', $tb_questao);
        }

        function deletar($id) {
            $this->db->where('id', $id);
            return $this->db->delete('tb_questao');
        }
    }