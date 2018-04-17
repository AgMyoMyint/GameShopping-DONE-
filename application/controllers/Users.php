<?php

class Users extends CI_Controller {
    public function register(){

        //Validation Rules
        $this->form_validation->set_rules('fname','First Name','trim|required');
        $this->form_validation->set_rules('lname','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');

        $this->form_validation->set_rules('username','UserName','trim|required|max_length[20]|min_length[4]');
        $this->form_validation->set_rules('password','Password','trim|required|max_length[50]|min_length[8]');
        $this->form_validation->set_rules('password2','Confirmed Password','trim|required|matches[password]');

        if($this->form_validation->run()== FALSE){
            $data['main_content'] = 'register';
            $this->load->view('layouts/main',$data);
        }else{
            if($this->User_model->register()){
                $this->session->set_flashdata('registered',"You are now registered and can login");
                redirect('products');
            }
        }

    }


    public function login(){

        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));

        $user_id = $this->User_model->login($username, $password);
        if($user_id){

            $data = array(
                'user_id' => $user_id,
                'username' => $username,
                'logged_in' => true,
            );
            $this->session->set_userdata($data);

            $this->session->set_flashdata('registered',"Welcome to Game Shopping ,". $username . " ! ");
            redirect('products');
        }else{
            $this->session->set_flashdata('loginfailed',"Incorrect Username and Password");
            redirect('products');
        }

    }
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('products');
    }

}