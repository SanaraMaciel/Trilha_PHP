<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcessoModel extends CI_Model {

    public function logar($Usuario, $senha) {
        $this->db->where('usuario_nome', $Usuario);
        $this->db->where('senha', $senha);
        return $this->db->get('usuario')->result();
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
