<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Receitas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Carrega os helpers
        $this->load->library(array('pdf'));
    }

    public function validar_sessao() {
        if (!$this->session->userdata('LOGADO')) {
            redirect('admin/acesso');
        }
        return true;
    }

    public function index($alert = null) {
        $this->validar_sessao();
        $this->load->model('admin/receitasmodel');

        $data['receitas'] = $this->receitasmodel->get_receitas();
        if ($alert != null) {
            $data['alert'] = $this->msg($alert);
        }
        $this->load->view('admin/includes/topo');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/listareceitasview', $data);
        $this->load->view('admin/includes/rodape');
    }

    public function receitas_ver($slug = null) {

        $this->load->view('admin/includes/topo');
        $this->load->view('admin/includes/menu');
        if ($slug == null) {
            $this->load->model('admin/receitasmodel');
            $data['receitas'] = $this->receitasmodel->get_receitas();
            $this->load->view('admin/listatodasreceitasview', $data);
        } else {
            $this->load->model('admin/receitasmodel');
            $data['receita'] = $this->receitasmodel->get_receita_slug($slug);
            $this->load->view('admin/listareceitaview', $data);
        }
        $this->load->view('admin/includes/rodape');
    }

    public function receitas_categorias($categoria) {
        $this->load->helper("url");
        $this->validar_sessao();
        $categoria = $this->uri->segment(4, 0);
        $this->load->model('admin/receitasmodel');

        $data['receitas'] = $this->receitasmodel->get_receitas_categorias($categoria);

        $this->load->view('admin/includes/topo');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/listareceitascategoriaview', $data);
        $this->load->view('admin/includes/rodape');
    }

    public function cadastro() {
        $this->validar_sessao();
        $this->load->model('admin/receitasmodel', 'receitas');
        $data['categorias'] = $this->receitas->get_categorias();

        $this->load->view('admin/includes/topo');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/novareceitaview', $data);
        $this->load->view('admin/includes/rodape');
    }

    public function atualizacao($codigo) {
        $this->validar_sessao();
        $this->load->model('admin/receitasmodel', 'receitas');

        $data['categorias'] = $this->receitas->get_categorias();
        $data['receita'] = $this->receitas->get_receita($codigo);


        $this->load->view('admin/includes/topo');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/atualizareceitaview', $data);
        $this->load->view('admin/includes/rodape');
    }

    public function salvar() {
        $this->validar_sessao();
        $this->load->model('admin/receitasmodel');
        $data['receita'] = $this->input->post('receita');
        $data['slug_receita'] = $this->input->post('slug_receita');
        $data['texto'] = $this->input->post('texto');
        $data['categoria'] = $this->input->post('categoria');
        $data['foto'] = $this->upload_imagem();


        $result = $this->receitasmodel->insert('receitas', $data);
        if ($result) {
            redirect('admin/receitas/1');
        } else {
            redirect('admin/receitas/2');
        }
    }

    public function salvar_update() {
        $this->validar_sessao();
        $this->load->model('admin/receitasmodel');
        $data['receita'] = $this->input->post('receita');
        $data['slug_receita'] = $this->input->post('slug_receita');
        $data['categoria'] = $this->input->post('categoria');
        $data['texto'] = $this->input->post('texto');

        //A funcção upload_imagem() tentará fazer o upload de uma imagem. Caso o usuario não tenha
        //selecionado alguma imagem, a função irá retornar null. Sendo assim, não será necessário
        // atualizar o campo 'imagem_noticia', somente quando a função retornar o nome de uma imagem.
        $upload = $this->upload_imagem();
        if ($upload != null) {
            $data['foto'] = $upload;
        }


        $codigo = $this->input->post('codigo');

        $result = $this->receitasmodel->update('receitas', $data, $codigo);
        if ($result) {
            redirect('admin/receitas/5');
        } else {
            redirect('admin/receitas/6');
        }
    }

    public function deletar($codigo) {
        $this->validar_sessao();
        $this->load->model('admin/receitasmodel');
        $result = $this->receitasmodel->delete('receitas', $codigo);
        if ($result) {
            redirect('admin/receitas/3');
        } else {
            redirect('admin/receitas/4');
        }
    }

    function upload_imagem() {

        $caminho = './imagens/receitas';
        $config['upload_path'] = $caminho;
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "5907";
        $config['max_height'] = "5280";
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("imagem")) {

            //            $error = array('error' => $this->upload->display_errors());
            //            echo '[' . realpath($config['upload_path']) . ']<br>';
            //            print_r($error);
            //            exit();
            return null;
        } else {
            //Deletar foto existente para subir a nova imagem
            $cod_receita = $this->input->post('codigo');
            $this->db->select('id_receita,foto');
            $this->db->where('id_receita', $cod_receita);
            $data = $this->db->get('receitas')->result();

            if (isset($data[0]->foto)) {
                unlink(realpath($caminho) . '/' . $data[0]->foto);
            }
            // Fim do código de deletar a imagem

            $data = array('upload_data' => $this->upload->data());
            $config['image_library'] = 'GD2';
            $config['source_image'] = $caminho . '/' . $data['upload_data']['file_name'];
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false; //Redimensiona a imagem sem desconfiguralá-la;
            $config['quality'] = "100%";

            $config['width'] = 740;
            $config['height'] = 500;

            //Redimena a imagem
            $this->load->library('image_lib', $config);
            if (!$this->image_lib->resize()) {
                //Caso ocorrer algum erro, o CodeIgniter mostra na tela o que ocorreu.
                echo $this->image_lib->display_errors();
                exit();
            }
            return $data['upload_data']['file_name'];
        }
    }

    public function imprimir() {
        $this->validar_sessao();

        $slug = $this->uri->segment(4, 0);
        $this->load->model('admin/receitasmodel');
        $dados['receitas'] = $this->receitasmodel->get_receita_slug($slug);


        //var_dump($dados);

        $this->template->set('titulo', 'Receitas culinárias');

        $conteudo = $this->template->load('TemplatePDF', 'ImprimirReceita', $dados, TRUE);

        $this->pdf->geraPDF($conteudo);
    }

    public function msg($alert) {
        $str = '';
        if ($alert == 1)
            $str = 'success-Receita cadastrada com sucesso!';
        else if ($alert == 2)
            $str = 'danger-Não foi possível cadastrar a Receita. Por favor, tente novamente!';
        else if ($alert == 3)
            $str = 'success- Receita removida com sucesso!';
        else if ($alert == 4)
            $str = 'danger-Não foi possível remover a receita. Por favor, tente novamente!';
        elseif ($alert == 5)
            $str = 'success- Receita atualizada com sucesso!';
        else if ($alert == 6)
            $str = 'danger-Não foi possível atualizar a receita. Por favor, tente novamente!';
        else
            $str = null;
        return $str;
    }

}
