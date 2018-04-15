<?php

class products extends  CI_Controller {



    public function index(){

        $data['products'] = $this->Product_model->get_products() ;
        $data['main_content'] = "products";
        //load view
        $this->load->view('layouts/main',$data);
    }

}