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
<<<<<<< HEAD
			$row = null;
			$this->load->model('Modelo');
			$data['usuarios']='';
			$data['usuarioActualizar'] = $row;
			$this->load->view('index', $data);	
=======
			$this->load->model('Modelo');
			$data['usuarios']='';
			$this->load->view('index',$data);	
>>>>>>> cb01eae41359c975c46e452cd4570e3a72aefb51
		}
		public function create()
		{
			$this->load->library('form_validation');
			$validaciones = array(
                array(
                        'field' => 'txtNombre',
<<<<<<< HEAD
                        'label' => 'Nombre',
                        'rules' => 'required|alpha',
                        'errors' => array('required' => "El %s es requerido!",
                        			       'alpha' => "El %s solo acepta letras!")
                ),
                array(
                        'field' => 'txtEdad',
                        'label' => 'Edad',
                        'rules' => 'required|numeric',
                        'errors' => array('required' => "El %s es requerido!",
                        			       'alpha' => "El %s solo acepta números!")
=======
                        'label' => 'Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'txtEdad',
                        'label' => 'Age',
                        'rules' => 'required|numeric'
>>>>>>> cb01eae41359c975c46e452cd4570e3a72aefb51
                )
                ,
                array(
                        'field' => 'sltSexo',
<<<<<<< HEAD
                        'label' => 'Sexo',
                        'rules' => 'required',
                        'errors' => array('required' => "El %s es requerido!")
=======
                        'label' => 'Genre',
                        'rules' => 'required'
>>>>>>> cb01eae41359c975c46e452cd4570e3a72aefb51
                )
        	);
			$this->form_validation->set_rules($validaciones);

			if ($this->form_validation->run() == FALSE){
<<<<<<< HEAD
				 $row = new stdClass();
				 $row->ID = 0;
				 $row->Nombre = $this->input->post('txtNombre');
				 $row->Edad = $this->input->post('txtEdad');
				 $row->Sexo = $this->input->post('sltSexo');
                 $this->Agregar($row);
=======

                    $this->Agregar();
>>>>>>> cb01eae41359c975c46e452cd4570e3a72aefb51
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
<<<<<<< HEAD

		public function Agregar($row = null)
		{
			$data["usuarioActualizar"] = $row;
			$this->load->view('catalogo', $data);
		}

=======
		public function Agregar()
		{
			$this->load->view('catalogo');
		}
>>>>>>> cb01eae41359c975c46e452cd4570e3a72aefb51
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