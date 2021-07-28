<?php 

class Product {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    //Add new Product
    public function AddProduct($id,$productName,$productDescription,$price,$Quantity,$category){
        
        $this->db->query("INSERT INTO products (ProductId,ProductName,ProductDescription,Price,Quantity,Category) VALUES (:id,:productName,:productDescription,:price,:Quantity,:category)");
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
    //update product
    public function UpdateProduct($id,$productName,$productDescription,$price,$Quantity,$category){
        
        $this->db->query("UPDATE  products set ProductName=:productName,ProductDescription=:productDescription,Price=:price,Quantity=:Quantity,Category=:category WHERE ProductId=:id");
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

    public function DeleteProduct($id){
        
        $this->db->query("DELETE  FROM products WHERE ProductID=:id");
        $this->db->bind(':id',$id);
        
        $this->db->execute();
        
        if($this->db->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public function ListProducts(){
        $this->db->query("SELECT * FROM products ");
        return $this->db->resultSet();
    }

}
