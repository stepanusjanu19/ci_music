<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Lagu extends CI_Model {

    protected $tbl_lagu = "tbl_lagu";

    public function save_data($data)
    {
        return  $this->db->insert($this->tbl_lagu, $data);
    }

    public function get_data()
    { 
        $this->db->join('tbl_users', 'tbl_users.user_id = tbl_lagu.user_id');
        return $this->db->get($this->tbl_lagu)->result_array();
        
    }
}

/* End of file Controllername.php */
 ?>