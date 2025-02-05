<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Acesso extends CI_Controller {

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

    public function index() {

        if ($this->validar_sessao()) {
            $this->load->view('admin/includes/topo');
            $this->load->view('admin/includes/menu');
            $this->load->model('admin/receitasmodel');
            $data['produtos'] = $this->produtosmodel->get_produtos(3);
            $this->load->view('admin/paginainicialview', $data);
            $this->load->view('admin/includes/rodape');
        } else {
            redirect('admin/acesso');
        }
    }

    public function login($alert = null) {
        if ($this->session->userdata('LOGADO'))
            redirect('admin');
        $dados = null;
        if ($alert != null)
            $dados['alert'] = $this->msg($alert);
        $this->load->view('admin/acessoview', $dados);
    }

    public function logar() {

        $this->load->model('admin/acessomodel');

        $Usuario = $this->input->post('usuario_nome');
        $senha = md5($this->input->post('senha'));
        $usuario = $this->acessomodel->logar($Usuario, $senha);

        if (count($usuario) === 1) {
            $dados['id_usuario'] = $usuario[0]->id_usuario;
            $dados['usuario_nome'] = $usuario[0]->usuario_nome;
            $dados['LOGADO'] = TRUE;
            //$dados['imagem_usuario'] = $usuario[0]->imagem_usuario;

            $this->session->set_userdata($dados);
            redirect("admin/");
        } else {
            redirect("admin/acesso/2");
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function configuracoes() {
        $this->validar_sessao();

        $this->load->view('admin/includes/topo');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/configuracoesview');
        $this->load->view('admin/includes/rodape');
    }

    public function msg($alert) {
        $str = '';
        if ($alert == 1)
            $str = 'success- Login realizado com sucesso!';
        else if ($alert == 2)
            $str = 'danger-Não foi possível entrar. Verifique o email e a senha e tente novamente!';
        else
            $str = null;
        return $str;
    }

}
