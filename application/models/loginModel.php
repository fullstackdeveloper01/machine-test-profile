<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('');
    }


	public function getDataWhere($table, $select, $where)
	{
		$query= $this->db->select($select)->from($table)->where($where)->get();
		return ($query->num_rows() > 0) ? $query->row_array():"0";
	}
	

}

