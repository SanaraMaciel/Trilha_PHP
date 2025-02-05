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
        $this->load->view('usu/includes/menu');
        $this->load->model('admin/receitasmodel');
        $data['receitas'] = $this->receitasmodel->get_receitas(3);
        $this->load->view('usu/paginainicialview', $data);
        $this->load->view('usu/includes/rodape');
    }

    public function receitas($slug = null) {

        $this->load->view('usu/includes/topo');
        $this->load->view('usu/includes/menu');
        if ($slug == null) {
            $this->load->model('admin/receitasmodel');
            $data['receitas'] = $this->receitasmodel->get_receitas();
            $this->load->view('usu/listareceitasview', $data);
        } else {
            $this->load->model('admin/receitasmodel');
            $data['receita'] = $this->receitasmodel->get_receita_slug($slug);
            $this->load->view('usu/listareceitaview', $data);
        }
        $this->load->view('usu/includes/rodape');
    }

    public function receitas_categorias($categoria) {
        $this->load->helper("url");

        $categoria = $this->uri->segment(2, 0);
        $this->load->model('admin/receitasmodel');
        $this->load->view('usu/includes/topo');
        $this->load->view('usu/includes/menu');
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
        
        $this->template->set('titulo','Receitas culinárias');

        $conteudo = $this->template->load('TemplatePDF', 'ImprimirReceita', $dados, TRUE);

        $this->pdf->geraPDF($conteudo);
                
    }

}
