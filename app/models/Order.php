<?php

class Order
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    //Add new Product
    public function AddOrder($userID, $adress, $city, $Zip, $phone)
    {

        $this->db->query("INSERT INTO orders (UserID,OrderAddress,OrderCity,OredrZip,OrderPhone) VALUES (:userID,:adress,:city,:Zip,:phone)");
        $this->db->bind(':userID', $userID);
        $this->db->bind(':adress', $adress);
        $this->db->bind(':city', $city);
        $this->db->bind(':Zip', $Zip);
        $this->db->bind(':phone', $phone);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function AddOrderD($userID, $orderID)

    {
        $this->db->query("select * FROM Cart where userID = :userID");
        $this->db->bind(':userID', $userID);
        $this->db->execute();
        $count = $this->db->rowCount();
        for($i=0;$i<$count;$i++) {
        $this->db->query("INSERT INTO orderdetails (orderID,UserID) VALUES (:orderID,:userID)");
        $this->db->bind(':orderID', $orderID[$i]);
        $this->db->bind(':userID', $userID[$i]);
       
         if ( $this->db->execute()) {
            return true;
        } else {
            return false;
        }
        }
        // $this->db->query("INSERT INTO orders (UserID,OrderAddress,OrderCity,OredrZip,OrderPhone) VALUES (:userID,:adress,:city,:Zip,:phone)");
        // $this->db->bind(':userID', $userID);
        // $this->db->bind(':adress', $adress);
        // $this->db->bind(':city', $city);
        // $this->db->bind(':Zip', $Zip);
        // $this->db->bind(':phone', $phone);
        // $this->db->execute();

        // if ($this->db->rowCount() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    }
    //update product
    public function UpdateProduct($id, $productName, $productDescription, $price, $Quantity, $category)
    {

        $this->db->query("UPDATE  products set ProductName=:productName,ProductDescription=:productDescription,Price=:price,Quantity=:Quantity,Category=:category WHERE ProductId=:id");
        $this->db->bind(':id', $id);
        $this->db->bind(':productName', $productName);
        $this->db->bind(':productDescription', $productDescription);
        $this->db->bind(':price', $price);
        $this->db->bind(':Quantity', $Quantity);
        $this->db->bind(':category', $category);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function DeleteProduct($id)
    {

        $this->db->query("DELETE  FROM products WHERE ProductID=:id");
        $this->db->bind(':id', $id);

        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function ListProducts()
    {
        $this->db->query("SELECT * FROM products ");
        return $this->db->resultSet();
    }
    public function SingleProduct($id)
    {
        $this->db->query("SELECT * FROM products where ProductID=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ProductByCategory($category)
    {
        $this->db->query("SELECT * FROM products where Category=:category");
        $this->db->bind(':category', $category);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function NewArrival()
    {
        $this->db->query("SELECT * FROM `products` ORDER BY created_at DESC LIMIT 4 ");
        return $this->db->resultSet();
    }
}
