<?php
class Inv_item extends CI_Model 
{
	function invitem($data)
	{
          $this->db->insert('cainv',$data);
          return $this->db->insert_id();
	}
	
}