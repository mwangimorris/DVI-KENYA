<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_Stock extends CI_Model
{
	
	function __construct()
	{
	parent::__construct();	
	}

	function get_transaction_type(){
		$this->db->select('id,transaction_type');
        $query = $this->db->get('m_transaction_type');
        return $query->result_array();
	}
	function get_batches($selected_vaccine){
		$this->db->select('batch_number,expiry_date,stock_balance');
		$array = array('vaccine_id' => $selected_vaccine, 'stock_balance !=' => '0');
        $this->db->where($array);
		$query = $this->db->get('m_stock_balance');
		 return $query->result_array();
	}
	function get_batchdetails($selected_batch){
		$this->db->select('expiry_date,stock_balance');
		$array = array('batch_number' => $selected_batch, 'stock_balance !=' => '0');
        $this->db->where($array);
		$query = $this->db->get('m_stock_balance');
		 return $query->result_array();
	}
	function get_vaccine_details(){
		
	}
	

}