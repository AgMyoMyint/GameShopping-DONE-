<?php

class Users extends CI_Controller {
    public function register(){

        //Validation Rules
        $this->form_validation->set_rules('fname','First Name','trim|required|max_length[20]|min_length[2]');

        if($this->form_validation->run()== FALSE){
            $data['main_content'] = 'register';
            $this->load->view('layouts/main',$data);
        }else{
            $data['main_content'] = 'register';
            $this->load->view('layouts/main',$data);
        }

    }

    public function insert(){

    }
}