<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Controlador extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
		}
		public function index()
		{
			$this->load->model('Modelo');
			$data['usuarios']='';
			$this->load->view('index',$data);	
		}
		public function create()
		{
			$this->load->library('form_validation');
			$validaciones = array(
                array(
                        'field' => 'txtNombre',
                        'label' => 'Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'txtEdad',
                        'label' => 'Age',
                        'rules' => 'required|numeric'
                )
                ,
                array(
                        'field' => 'sltSexo',
                        'label' => 'Genre',
                        'rules' => 'required'
                )
        	);
			$this->form_validation->set_rules($validaciones);

			if ($this->form_validation->run() == FALSE){

                    $this->Agregar();
            }
            else{
            		$usuario= array('nombre' => $this->input->post('txtNombre'),
									'edad' => $this->input->post('txtEdad'),
									'sexo' => $this->input->post('sltSexo') );
					$this->load->model('Modelo');
					if($this->Modelo->Create($usuario))
					{
						redirect('Controlador');
					}
					else
					{
						echo "Error";
					}
                    $this->load->view('formsuccess');
            	}
			/*$this->load->helper('url');*/	
		}
		public function Agregar()
		{
			$this->load->view('catalogo');
		}
		public function read()
		{
			$this->load->model('Modelo');
			$busqueda=$this->input->post('txtBuscar');
			$resultado=$this->Modelo->Read($busqueda);
			if($resultado!=false)
			{
				$data['usuarios']=$resultado;
			}
			else
			{
				$data['usuarios']='';	
			}
			$this->load->view('index',$data);	
		}
		public function llenarCatalogo()
		{
			$busqueda= $this->uri->segment(3);
			$this->load->model('Modelo');
			$data['usuarioActualizar']=$this->Modelo->traerUsuario($busqueda);
			$this->load->view('catalogo',$data);	
		}
		public function update()
		{
			$usuario= array('nombre' => $this->input->post('txtNombre'),
							'edad' => $this->input->post('txtEdad'),
							'sexo' => $this->input->post('sltSexo') );
			$id = $this->input->post('id');
			$this->load->model('Modelo');
			if($this->Modelo->Update($usuario,$id))
			{
				redirect('Controlador');
			}
			else
			{
				echo "Error";
			}
		}
		public function delete()
		{
			$id= $this->uri->segment(3);
			$this->load->model('Modelo');
			if($this->Modelo->Delete($id))
			{
				redirect('Controlador');
			}
			else
			{
				echo "Error";
			}
		}
	}
?>