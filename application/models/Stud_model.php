<?php


    Class Stud_model extends CI_Model{
        
      function __construct() { 
         parent::__construct(); 
      } 
        
        
        // This function is for insertion of record
      public function insert($data) { 
         if ($this->db->insert("stud", $data)) { 
            return true; 
         } 
      
        
        
        // This function is for deleting the specified record
        public function delete($roll_no){
            if($this->db->delete("stud","roll_no =".$roll_no));
            return true;
            
        }
        
        //This function is for updating the existing record
        
        public function update($data,$old_roll_no){
            $this->db->set($data);
            $this->db->where("roll_no",$old_roll_no);
            $this->db->update("stud",$data);
        }
        
        
        
        
        
    }

?>