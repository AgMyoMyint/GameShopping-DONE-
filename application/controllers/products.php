<?php
class products extends  CI_Controller {


    public function index(){
        $data['name'] = 'mike' ;
        $data['main_content'] = 'products' ;

        //load view
        $this->load->view('layouts/main',$data);
    }

}