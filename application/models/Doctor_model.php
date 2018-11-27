<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Doctor_model extends CI_Model{
	
        public function getInventory(){
            $query = $this->db->get('inventory');
            return $query->result();
        }
        public function deleteInventroy($id){
            $this->db->where('id', $id);
            $this->db->delete('inventory');
            redirect('Doctor/inventoryManage');
        }
        public function addInventroy($data){
            $this->db->insert('inventory',$data);
            redirect('Doctor/inventoryManage');
        }
        public function updateInventroy($id,$data){
            $this->db->where('id',$id);
            $this->db->update('inventory',$data);
            redirect('Doctor/inventoryManage');
            
        }

}