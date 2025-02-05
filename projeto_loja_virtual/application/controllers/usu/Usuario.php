<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Carrega os helpers
        $this->load->library(array('pdf'));
    }

    public function index() {

        $this->load->view('usu/includes/topo');
        $this->load->model('admin/produtosmodel');
        $data['produtos'] = $this->produtosmodel->get_produtos(6);
        $this->load->view('usu/paginainicialview', $data);
        $this->load->view('usu/includes/rodape');
    }

    public function acessibilidade() {

        $this->load->view('usu/includes/topo');
        $this->load->model('admin/produtosmodel');
        $data['produtos'] = $this->produtosmodel->get_produtos();
        $this->load->view('usu/paginainicialview', $data);
        $this->load->view('usu/includes/rodape');
    }

    public function produtos($slug = null) {

        $this->load->view('usu/includes/topo');
        if ($slug == null) {
            $this->load->model('admin/produtosmodel');
            $data['produtos'] = $this->produtosmodel->get_produtos();
            $this->load->view('usu/listaprodutosview', $data);
        } else {
            $this->load->model('admin/produtosmodel');
            $data['receita'] = $this->produtosmodel->get_produto_slug($slug);
            $this->load->view('usu/listaprodutoview', $data);
        }
        $this->load->view('usu/includes/rodape');
    }

    public function produtos_categorias($categoria) {
        $this->load->helper("url");

        $categoria = $this->uri->segment(2, 0);
        $this->load->model('admin/produtosmodel');
        $this->load->view('usu/includes/topo');
        $data['receitas'] = $this->receitasmodel->get_receitas_categorias($categoria);
        $this->load->view('usu/listareceitascategoriaview', $data);
        $this->load->view('usu/includes/rodape');
    }

    public function imprimir() {

        //echo $this->uri->segment(4, 0) . "<br>";
        $slug = $this->uri->segment(4, 0);


        $this->load->model('admin/receitasmodel');
        $dados['receitas'] = $this->receitasmodel->get_receita_slug($slug);


        //var_dump($dados);

        $this->template->set('titulo', 'Receitas culinárias');

        $conteudo = $this->template->load('TemplatePDF', 'ImprimirReceita', $dados, TRUE);

        $this->pdf->geraPDF($conteudo);
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
            $this->load->view('usu/contatoview');
            $this->load->view('usu/includes/rodape');
        }
    }

}
