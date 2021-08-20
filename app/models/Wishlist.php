<?php 

class wishlist {
    private $db;

    public function __construct(){
        $this->db = new Database ;
    }
    public function AddWishlist($userID,$productID){
        $this->db->query("INSERT INTO wishlist(userID,productID) VALUES(:userID,:productID)");
        $this->db->bind(':userID',$userID);
        $this->db->bind(':productID',$productID);
        $this->db->execute();
        if($this->db->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public function DeleteWishlist($id){
        $this->db->query("DELETE FROM wishlist WHERE id=:id ");
        $this->db->bind(':id',$id);
        $this->db->execute();
        if($this->db->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public function wishlist($userID){
        $this->db->query("SELECT p.*,w.id FROM wishlist w ,products p,users u WHERE w.productID=p.productID AND w.userID=u.userID AND w.userID=:userID ");
        $this->db->bind(':userID',$userID);
        return $this->db->resultSet();

    }
    

}
