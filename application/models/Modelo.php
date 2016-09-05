<?php  
	class Modelo extends CI_Model
	{
		public function __construct()
		{

		}
		public function Create($usuario)
		{
			if($this->db->insert('catalogo',$usuario))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function Read($busqueda)
		{
			if(empty($busqueda))
			{

			}
			else
			{
				$this->db->like('Nombre',$busqueda);
			}
			$resultado=$this->db->get('catalogo');
			if($resultado->num_rows()>0)
			{
				return $resultado->result();
			}
			else
			{
				return false;
			}
		}
		public function traerUsuario($usuario)
		{
			$this->db->like('ID',$usuario);
			$resultado=$this->db->get('catalogo');
			return $resultado->row();
		}
		public function Update($usuario,$id)
		{
			$this->db->where('ID',$id);
			if($this->db->update('catalogo',$usuario))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function Delete($id)
		{
			$this->db->where('ID',$id);
			if($this->db->delete('catalogo'))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>