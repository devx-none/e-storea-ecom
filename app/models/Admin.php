<?php 

class admin {
    private $db;

    public function __construct(){
        $this->db = new Database ;
    }
   
    public function admin(){
        $this->db->query("SELECT * FROM admin ");
        return $this->db->resultSet();
    }

}
