<?php 

class Cart {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    //Add new Product
    public function AddToCart($userID,$productID,$Quantity){
        
        $this->db->query("INSERT INTO cart(userID,productID,Quantity) VALUES (:userID,:productID,:Quantity)");
        $this->db->bind(':userID',$userID);
        $this->db->bind(':productID',$productID);
        $this->db->bind(':Quantity',$Quantity);
        $this->db->execute();
        if($this->db->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    //update product
    public function updateToCart($id,$productName,$productDescription,$price,$Quantity,$category){
        
        $this->db->query("UPDATE  products set ProductName=:productName,ProductDescription=:productDescription,Price=:price,Quantity=:quantity,Category=:category WHERE ProductId=:id");
        $this->db->bind(':id',$id);
        $this->db->bind(':productName',$productName);
        $this->db->bind(':productDescription',$productDescription);
        $this->db->bind(':price',$price);
        $this->db->bind(':Quantity',$Quantity);
        $this->db->bind(':category',$category);
        $this->db->execute();
        if($this->db->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public function Delete($id,$userID){
        
        $this->db->query("DELETE  FROM cart WHERE ProductID=:id AND userID=:userID");
        $this->db->bind(':id',$id);
        $this->db->bind(':userID',$userID);
        
        $this->db->execute();
        
        if($this->db->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public function cart($id){
        $this->db->query("SELECT p.* FROM cart c ,products p ,users u WHERE c.userID=u.userID AND c.productID=p.productID AND c.userID=:userID");
        $this->db->bind(':userID',$id);

        return $this->db->resultSet();
    }

}
