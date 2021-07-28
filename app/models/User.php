<?php 

class User {
    private $db;

    public function __construct(){
        $this->db = new Database ;
    }
    public function register($first_name,$last_name,$email,$password,$phone){
        $this->db->query("INSERT INTO users(userID,FirstName,LastName,Email,Password,phone) VALUES(UUID(),:first_name,:last_name,:email,:password,:phone)");
        $this->db->bind(':first_name',$first_name);
        $this->db->bind(':last_name',$last_name);
        $this->db->bind(':email',$email);
        $this->db->bind(':password',$password);
        $this->db->bind(':phone',$phone);
        $this->db->execute();
        if($this->db->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public function login($email,$password){
        $this->db->query("SELECT * FROM users WHERE email=:email AND password=:password");
        $this->db->bind(':email',$email);
        $this->db->bind(':password',$password);
        $this->db->execute();
        if($this->db->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

}
