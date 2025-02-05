<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuariomodel extends CI_Model {

    var $id_usuario;
    var $usuario_nome;
    var $senha;

    public function get_usuarios() {
        // $result = "SELECT * FROM usuario order by usuario ASC;";
        $result['resultado'] = $this->db->get('usuario')->result();
        return $result;
    }

//    public function get_usuarios() {
//        $this->db->select('id_usuario, usuario, senha');
//        $this->db->from('usuario');
//
//        $query = $this->db->get();
//
//        if ($query->num_rows() == 1) {
//            $results = $query->result();
//            return $results;
//        } else {
//            return FALSE;
//        }
//    }

    public function get_usuario($codigo) {
        $this->db->select('id_usuario, usuario_nome, senha');
        $this->db->where('id_usuario', $codigo);
        $result = $this->db->get('usuario')->result();

        return $result;
    }

    public function insertUsuario($tabela, $data) {

        $result = $this->db->insert($tabela, $data);
        return $result;
    }

    public function updateUsuario($tabela, $data, $codigo) {
        $this->db->where('id_usuario', $codigo);
        $result = $this->db->update($tabela, $data);
        return $result;
    }

    public function deleteUsuario($tabela, $codigo) {
        $this->db->where('id_usuario', $codigo);
        $result = $this->db->delete($tabela);
        return $result;
    }

}
