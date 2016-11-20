<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Builder extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	function buildQuery($query)
	{
		$build = $this->db->query($query);
		
		return $build;
	}

	function getData($tabel)
	{
		$query = $this->db->get($tabel);

		return $query;
	}
	
	function getWhere($tabel , $data)
	{
		$query = $this->db->get_where($tabel, $data);
		
		return $query->row();
	}
	
	function insertData($tabel , $data)
	{
		$this->db->insert($tabel , $data);
		
		if ( $this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
	
	function deleteData($tabel , $data)
	{
		$this->db->delete($tabel , $data);
		
		if ( $this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}

	function updateData($tabel , $data , $where = '')
	{
		if ( $where != '' || $where != null)
		{
			$this->db->where($where);
		}

		$this->db->update($tabel , $data);

		if ( $this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}

	function countData($tabel , $where ='')
	{
		if ( $where != '')
		{
			$this->db->where($where);
		}

		$query = $this->db->get($tabel);

		return $query->num_rows();
	}
}

/* End of file Model.php */
/* Location: ./application/models/Model.php */