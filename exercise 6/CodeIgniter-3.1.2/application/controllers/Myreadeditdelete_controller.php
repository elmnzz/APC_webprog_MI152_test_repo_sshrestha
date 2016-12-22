<?php

class Myreadeditdelete_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Myreadeditdelete_model');
		$this->load->helper('url');
    } 

    /*
     * Listing of myinput
     */
    function index()
    {
        $data['data'] = $this->Myreadeditdelete_model->get_all_myinput();
        $this->load->view('myreadeditdelete_view/index',$data);
    }  
	
	
	 /*
     * Adding a new myinput
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required|max_length[255]');
		$this->form_validation->set_rules('nickname','Nickname','max_length[255]');
		$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
		$this->form_validation->set_rules('home_address','Home Address','required|max_length[255]');
		$this->form_validation->set_rules('comment','Comment','max_length[255]');
		$this->form_validation->set_rules('gender','Gender','required|max_length[255]');
		$this->form_validation->set_rules('cellphone','Cellphone','required|max_length[255]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'nickname' => $this->input->post('nickname'),
				'email' => $this->input->post('email'),
				'home_address' => $this->input->post('home_address'),
				'comment' => $this->input->post('comment'),
				'gender' => $this->input->post('gender'),
				'cellphone' => $this->input->post('cellphone'),
            );
            
            $myinput_id = $this->Myreadeditdelete_model->add_myinput($params);
            redirect('myreadeditdelete_controller/index');
        }
        else
        {
            $this->load->view('myreadeditdelete_view/add');
        }
    }  


    /*
     * Editing a myinput
     */
    function edit($id)
    {   
        // check if the myinput exists before trying to edit it
        $data = $this->Myreadeditdelete_model->get_myinput($id);
        
        if(isset($data['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','required|max_length[255]');
			$this->form_validation->set_rules('nickname','Nickname','max_length[255]');
			$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
			$this->form_validation->set_rules('home_address','Home Address','required|max_length[255]');
			$this->form_validation->set_rules('comment','Comment','max_length[255]');
			$this->form_validation->set_rules('gender','Gender','required|max_length[255]');
			$this->form_validation->set_rules('cellphone','Cellphone','required|max_length[255]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'nickname' => $this->input->post('nickname'),
					'email' => $this->input->post('email'),
					'home_address' => $this->input->post('home_address'),
					'comment' => $this->input->post('comment'),
					'gender' => $this->input->post('gender'),
					'cellphone' => $this->input->post('cellphone'),
                );

                $this->Myreadeditdelete_model->update_myinput($id,$params);            
                redirect('myreadeditdelete_controller/index');
            }
            else
            {   
                $data['data'] = $this->Myreadeditdelete_model->get_myinput($id);
    
                $this->load->view('myreadeditdelete_view/edit',$data);
            }
        }
        else
            show_error('The data you are trying to edit does not exist.');
    } 

    /*
     * Deleting myinput
     */
    function remove($id)
    {
        $myinput2 = $this->Myreadeditdelete_model->get_myinput($id);

        // check if the myinput exists before trying to delete it
        if(isset($myinput2['id']))
        {
            $this->Myreadeditdelete_model->delete_myinput($id);
            redirect('myreadeditdelete_controller/index');
        }
        else
            show_error('The myinput you are trying to delete does not exist.');
    }
    
}
