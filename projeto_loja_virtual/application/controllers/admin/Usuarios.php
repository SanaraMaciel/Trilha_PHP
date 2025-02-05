<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function validar_sessao() {
        if (!$this->session->userdata('LOGADO')) {
            redirect('admin/acesso');
        }
        return true;
    }

    public function index($alert = null) {
        $this->validar_sessao();
        $this->load->model('admin/usuariomodel');

        //$data['resultado'] = $this->usuariomodel->get_usuarios();
        $data['resultado'] = $this->db->get('usuario')->result();
        if ($alert != null) {
            $data['alert'] = $this->msg($alert);
        }

        $this->load->view('admin/includes/topo');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/listausuariosview', $data);
        $this->load->view('admin/includes/rodape');
    }

    public function cadastro() {
        $this->validar_sessao();
        $this->load->library('encrypt');
        $this->load->model('admin/usuariomodel', 'usuarios');
        $data['usuarios'] = $this->usuarios->get_usuarios();

        $this->load->view('admin/includes/topo');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/novousuarioview', $data);
        $this->load->view('admin/includes/rodape');
    }

    public function atualizacao($codigo) {
        $this->validar_sessao();
        $this->load->library('encrypt');

        $this->load->model('admin/usuariomodel', 'usuarios');
        $data['usuarios'] = $this->usuarios->get_usuario($codigo);

        $this->load->view('admin/includes/topo');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/atualizarusuarioview', $data);
        $this->load->view('admin/includes/rodape');
    }

    public function salvar() {
        $this->validar_sessao();
        $this->load->library('encrypt');
        $this->load->model('admin/usuariomodel');
        $data['usuario_nome'] = $this->input->post('usuario_nome');
        $data['senha'] = md5($this->input->post('senha'));

        $result = $this->usuariomodel->insertUsuario('usuario', $data);
        if ($result) {
            redirect('admin/usuarios/1');
        } else {
            redirect('admin/usuarios/2');
        }
    }

    public function salvar_update() {
        $this->validar_sessao();
        $this->load->library('encrypt');
        $this->load->model('admin/usuariomodel');
        $data['usuario_nome'] = $this->input->post('usuario_nome');
        $data['senha'] = md5($this->input->post('senha'));


        $codigo = $this->input->post('codigo');

        $result = $this->usuariomodel->updateUsuario('usuario', $data, $codigo);
        if ($result) {
            redirect('admin/usuarios/5');
        } else {
            redirect('admin/usuarios/6');
        }
    }

    public function deletar($codigo) {
        $this->validar_sessao();
        $this->load->model('admin/usuariomodel');
        $result = $this->usuariomodel->deleteUsuario('usuario', $codigo);
        if ($result) {
            redirect('admin/usuarios/3');
        } else {
            redirect('admin/usuarios/4');
        }
    }

    public function contato() {

        if ($this->session->userdata('LOGADO')) {
            $this->load->view('admin/includes/topo');
            $this->load->view('admin/includes/menu');
            $this->load->view('admin/contatoview');
            $this->load->view('admin/includes/rodape');
        } else {
            $this->load->view('usu/includes/topo');
            $this->load->view('usu/includes/menu');
            $this->load->view('admin/contatoview');
            $this->load->view('usu/includes/rodape');
        }
    }

    public function sobre() {
        if ($this->session->userdata('LOGADO')) {
            $this->load->view('admin/includes/topo');
            $this->load->view('admin/includes/menu');
            $this->load->view('admin/sobreview');
            $this->load->view('usu/includes/rodape');
        } else {
            $this->load->view('usu/includes/topo');
            $this->load->view('usu/includes/menu');
            $this->load->view('admin/sobreview');
            $this->load->view('usu/includes/rodape');
        }
    }

     public function acessibilidade($alert=null) {
         
    	if ($this->session->userdata('LOGADO')) {
            $this->load->view('admin/includes/topo');
            $this->load->view('admin/includes/menu');
            $this->load->view('admin/contatoview');
            $this->load->view('admin/includes/rodape');
        } else {
            $this->load->view('usu/includes/topo');
            $this->load->view('admin/contatoview');
            $this->load->view('usu/includes/rodape');
        }
     
    }

    
    public function msg($alert) {
        $str = '';
        if ($alert == 1)
            $str = 'success-Usuário cadastrado com sucesso!';
        else if ($alert == 2)
            $str = 'danger-Não foi possível cadastrar o usuário. Por favor, tente novamente!';
        else if ($alert == 3)
            $str = 'success- Usuário removido com sucesso!';
        else if ($alert == 4)
            $str = 'danger-Não foi possível remover o usuário. Por favor, tente novamente!';
        elseif ($alert == 5)
            $str = 'success- Usuário atualizado com sucesso!';
        else if ($alert == 6)
            $str = 'danger-Não foi possível atualizar o usuário. Por favor, tente novamente!';
        else
            $str = null;
        return $str;
    }

}
