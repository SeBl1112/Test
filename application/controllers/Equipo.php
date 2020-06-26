<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Equipo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Equipo_model');
    } 

    /*
     * Listing of equipos
     */
    function index()
    {
        $data['equipos'] = $this->Equipo_model->get_all_equipos();
        
        $data['_view'] = 'equipo/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new equipo
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'idLider' => $this->input->post('idLider'),
				'NombreProyecto' => $this->input->post('NombreProyecto'),
				'costo' => $this->input->post('costo'),
				'duracion' => $this->input->post('duracion'),
            );
            
            $equipo_id = $this->Equipo_model->add_equipo($params);
            redirect('equipo/index');
        }
        else
        {
			$this->load->model('Lider_model');
			$data['all_lider'] = $this->Lider_model->get_all_lider();
            
            $data['_view'] = 'equipo/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a equipo
     */
    function edit($idEquipo)
    {   
        // check if the equipo exists before trying to edit it
        $data['equipo'] = $this->Equipo_model->get_equipo($idEquipo);
        
        if(isset($data['equipo']['idEquipo']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'idLider' => $this->input->post('idLider'),
					'NombreProyecto' => $this->input->post('NombreProyecto'),
					'costo' => $this->input->post('costo'),
					'duracion' => $this->input->post('duracion'),
                );

                $this->Equipo_model->update_equipo($idEquipo,$params);            
                redirect('equipo/index');
            }
            else
            {
				$this->load->model('Lider_model');
				$data['all_lider'] = $this->Lider_model->get_all_lider();

                $data['_view'] = 'equipo/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The equipo you are trying to edit does not exist.');
    } 

    /*
     * Deleting equipo
     */
    function remove($idEquipo)
    {
        $equipo = $this->Equipo_model->get_equipo($idEquipo);

        // check if the equipo exists before trying to delete it
        if(isset($equipo['idEquipo']))
        {
            $this->Equipo_model->delete_equipo($idEquipo);
            redirect('equipo/index');
        }
        else
            show_error('The equipo you are trying to delete does not exist.');
    }
    
}