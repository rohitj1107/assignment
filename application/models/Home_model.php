<?php

/**
 * Model
 */
class Home_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function select(){
        $sql = $this->db->get('product');
        if ($sql) {
            return $sql->result_array();
        } else {
            return fales;
        }
    }

    public function insert($data){
        $sql = $this->db->insert('c_order',$data);
        if ($sql) {
            return true;
        } else {
            return fales;
        }
    }
}


 ?>
