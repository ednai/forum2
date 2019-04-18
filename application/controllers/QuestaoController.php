<?php
    class QuestaoController extends CI_Controller {
        
        public function index(){
            $parametros['questoes'] =  $this->Questao->get();
            $this->load->view('cabecalho');
            $this->load->view('questao/index',$parametros);
            $this->load->view('rodape');
        }
    }