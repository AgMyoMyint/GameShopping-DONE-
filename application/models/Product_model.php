<?php

class Product_model extends CI_Model{
    public function get_products(){
        $this->db->select('*');
        $this->db->from('products');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_products_details($id){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('id ', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function get_categories(){
        $this->db->select('*');
        $this->db->from('categories');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_popular(){
        $this->db->select("P.* , count(O.product_id) as total");
        $this->db->from("orders as O");
        $this->db->join("products as P","P.id = O.product_id","INNER");
        $this->db->group_by("O.product_id");
        $this->db->order_by('total','desc');

        $query = $this->db->get();

        return $query->result();
    }

    public function get_products_by_id($id){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function add_order($order_data){
        $insert  = $this->db->insert('orders',$order_data);

        return $insert;
    }
}