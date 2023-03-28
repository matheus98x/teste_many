<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
    public function index(){
        $this->load->view('login_view'); 
    }
    
    public function autenticar(){
        parent::Controller();
        $this->load->library('session');
        $this->load->model("usuarios_model");

        $nome = $this->input->post("nome");
        $senha = $this->input->post("senha");
        $usuario = $this->usuarios_model->logar($nome, $senha);

        if($usuario){
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success", "logado");
        }else{
            $this->session->set_flashdata("failure", "login incorreto");
        }

        redirect('/');
    }
}
?>