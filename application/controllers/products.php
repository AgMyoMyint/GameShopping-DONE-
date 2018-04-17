<?php

class products extends  CI_Controller {



    public function index(){

        $data['products'] = $this->Product_model->get_products() ;
        $data['main_content'] = "products";
        //load view
        $this->load->view('layouts/main',$data);
    }

    public function details($id){

        $data['product'] = $this->Product_model->get_products_details($id) ;
        $data['main_content'] = "details";
        $this->load->view('layouts/main',$data);
    }

    public function category($id){
        $data['products'] = $this->Product_model->get_products_by_id($id) ;
        $data['main_content'] = "products";
        //load view
        $this->load->view('layouts/main',$data);
    }

}