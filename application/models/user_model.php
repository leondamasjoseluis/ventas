<?php
class Usuarios_model extends CI_Model{


    function consultaLogin($usuario,$contrasena)  {

        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('usuario',$usuario);
        $this->db->where('contrasena',md5($contrasena));
        $this->db->order_by('id', 'Asc');
        $query= $this->db->get()->result_array();
        return $query;
        $query->free_result();

    }  
 }
?>