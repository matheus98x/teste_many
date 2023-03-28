<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class usuarios_model extends CI_Model{
        public function logar($nome, $senha){
            $this->db->where("nome", $nome);
            $this->db->where("senha", $senha);

            $usuario = $this->db->get("usuarios")->row_array();
            return $usuario;
        }
    }
?>