<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Receitasmodel extends CI_Model {

    public function get_receitas($limit = null) {
        $this->db->join('categorias', 'id_categoria = categoria', 'inner');
        if ($limit != null) {
            $this->db->limit($limit);
        }
        $this->db->order_by('id_receita', 'DESC');
        $result = $this->db->get('receitas')->result();
        return $result;
    }

    public function get_receita($codigo) {
        $this->db->join('categorias', 'categorias.id_categoria = receitas.categoria', 'inner');
        $this->db->where('id_receita', $codigo);
        $result = $this->db->get('receitas')->result();
        return $result;
    }

    public function get_receita_slug($receita) {
        $this->db->join('categorias', 'categorias.id_categoria = receitas.categoria', 'inner');
        $this->db->where('slug_receita', $receita);
        $result = $this->db->get('receitas')->result();
        return $result;
    }


    public function get_receitas_categorias($categoria) {
        
        $result  = $this->db->query("select * from receitas inner join categorias on receitas.categoria = categorias.id_categoria where categoria = $categoria;");
        
         return $result->result() ;
      
    }

    public function get_categorias() {
        $result = $this->db->get('categorias')->result();
        return $result;
    }

    public function insert($tabela, $data) {
        $result = $this->db->insert($tabela, $data);
        return $result;
    }

    public function update($tabela, $data, $codigo) {
        $this->db->where('id_receita', $codigo);
        $result = $this->db->update($tabela, $data);
        return $result;
    }

    public function delete($tabela, $codigo) {
        $this->db->where('id_receita', $codigo);
        $result = $this->db->delete($tabela);
        return $result;
    }

}
