<?php 


class Entradas extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Entradas_model');
        $this->load->helper('html');
        $this->load->database();
    }


	function index()
	{
		$data['entradasb'] = $this->Entradas_model->get_all_entradas();
		$data['_view'] = 'entradas/index';
		$this->load->view('template', $data);
	}

	function add()
	{
		if(isset($_POST) && count($_POST) > 0)
		{
         $params = array(
         	'titulo' => $this->input->post('titulo'),
         	'cuerpo' => $this->input->post('cuerpo'),
         	'autor' => $this->input->post('autor'),
         	'fechadeentrada' => $this->input->post('fechadeentrada'),
         );

         $entradasBlog = $this->Entradas_model->add_entradas($params);
         redirect('entradas/index');
        }	
        else
        {
        	$data['_view'] = 'entradas/add';
			$this->load->view('template', $data);
        }
    }

    function remove($id)
    {
        $entradas = $this->Entradas_model->get_entradas($id);
        if(isset($entradas['id']))
        {
            $this->Entradas_model->delete_entradas($id);
            redirect('entradas/index');
        }
        else
            show_error('The entrada you are trying to delete does not exist.');
    }

    function edit($id)
    {
    	$data['entradasb'] = $this->Entradas_model->get_entradas($id);

    	if(isset($data['entradasb']['id']))
    	{
    		if(isset($_POST) && count($_POST) > 0)     
            {  
            	$params = array(
            		'titulo' => $this->input->post('titulocuerpo'),
            		'cuerpo' => $this->input->post('cuerpo'),
            		'autor' => $this->input->post('autor'),
            	);

                $this->Entradas_model->update_entradas($id,$params);            
                redirect('entradas/index');
            }
            else
            {
                $data['_view'] = 'entradas/index';
                $this->load->view('template', $data);
            }

    	}
    	else
            show_error('The Entrada you are trying to edit does not exist.');

    }

    public function dataentradablog($id)
    {
        echo json_encode($this->Entradas_model->get_entradas($id));
    }
		
}
