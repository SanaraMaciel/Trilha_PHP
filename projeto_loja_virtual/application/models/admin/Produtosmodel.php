<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtosmodel extends CI_Model {

    public function get_produtos($limit = null) {


        $this->db->join('categoria', 'cod_categoria = categoria', 'inner');
        if ($limit != null) {
            $this->db->limit($limit);
        }
        $this->db->order_by('cod_produto', 'DESC');
        $result = $this->db->get('produtos')->result();
        return $result;

    }

    public function get_produto($codigo) {
        $this->db->join('categoria', 'categorias.cod_categoria = produtos.cod_categoria', 'inner');
        $this->db->where('cod_produto', $codigo);
        $result = $this->db->get('produtos')->result();
        return $result;
    }

    public function get_produto_slug($produto) {
        $this->db->join('categoria', 'categorias.cod_categoria = produtos.cod_categoria', 'inner');
        $this->db->where('sub_categoria', $produto);
        $result = $this->db->get('produtos')->result();
        return $result;
    }

    public function get_produtos_categorias($categoria) {

        $result = $this->db->query("select * from produtos inner join categoria on "
                . "produtos.cod_categoria = categoria.cod_categoria where categoria = $categoria;");

        return $result->result();
    }

    public function get_categorias() {
        $result = $this->db->get('categoria')->result();
        return $result;
    }

    public function insert($tabela, $data) {
        $result = $this->db->insert($tabela, $data);
        return $result;
    }

    public function update($tabela, $data, $codigo) {
        $this->db->where('cod_produto', $codigo);
        $result = $this->db->update($tabela, $data);
        return $result;
    }

    public function delete($tabela, $codigo) {
        $this->db->where('cod_produto', $codigo);
        $result = $this->db->delete($tabela);
        return $result;
    }

}
