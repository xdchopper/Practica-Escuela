<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Controlador extends CI_Controller
	{
		public function index()
		{
			$this->load->helper(array('form', 'url'));
			$this->load->view('index');
			
		}
		public function create()
		{
			$this->load->library('form_validation');
			$validaciones = array(
                array(
                        'field' => 'txtCodigo',
                        'label' => 'Code',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'txtNombre',
                        'label' => 'Name',
                        'rules' => 'required'
                )
        	);
			$this->form_validation->set_rules($validaciones);

			if ($this->form_validation->run() == FALSE){

                    $this->index();
            }
            else{
                    $this->load->view('formsuccess');
            }

			$this->load->helper('url');	
			$usuario= array('código' => $this->input->post('txtCodigo'),
							'nombre' => $this->input->post('txtNombre') );

			$this->load->model('Modelo');
			if($this->Modelo->Create($usuario))
			{
				redirect('Controlador');
			}
			else
			{
				echo "Error";
			}
		}
		public function read()
		{
			$data['personas']=$this->Modelo->Read();
		}
	}
?>