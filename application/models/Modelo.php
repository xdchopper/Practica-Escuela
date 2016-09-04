<?php  
	class Modelo extends CI_Model
	{
		public function __construct()
		{

		}
		public function Create($Usuario)
		{
			if($this->db->insert('catalogo',$Usuario))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function Read()
		{
			$consulta=$this->db->get('catalogo');
			return $consulta->result();
		}
		}
		/*
		public function Update($Código,$Nombre)
		{
			$sql="UPDATE Usuario(Código,Nombre) SET ('".$Código."','".$Nombre."')";
		}
		*/
	}
?>