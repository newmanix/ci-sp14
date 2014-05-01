<?php
//mailing_list_model


class Mailing_list_model extends CI_Model
{
	public function __construct()
	{//creates an active connection to DB
		$this->load->database();
	}//end constructor
	
	public function get_mailing_list()
	{//will show all data in table named mail_list
		return $this->db->get('mailing_list');	
	}//end get_mailing_list()
	
	public function get_id($id)
	{//will show all data in table named mail_list
		$this->db->where('userid',$id);	
		return $this->db->get('mailing_list');	
	}//end get_id()
	
	public function insert($row)
	{
		$this->db->insert('mailing_list',$row);	
		
	}//end insert()

}

?>