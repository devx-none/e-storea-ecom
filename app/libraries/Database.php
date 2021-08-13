<?php

/*
PDO Database Class 
Connect to database
Create prepared statements
Bind values 
Return rows and results
*/

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh ;
    private $stmt ;
    private $error ;
    
    public function __construct()
    {
        $dbh = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );

        try {
            $this->dbh = new PDO($dbh, $this->user, $this->pass, $options);
        } catch (PDOException $err) {
            $this->error = $err->getMessage();
            echo $this->error;
        }

    }

  //Prepare statement with query 
  public function query($sql){
      $this->stmt = $this->dbh->prepare($sql);
  }

  //bind values 
  public function bind($param, $value){
    //   if(!is_null($type)){
    //       switch(true){
    //           case is_int($value):
    //             $type = PDO::PARAM_INT;
    //           case is_bool($value):
    //             $type = PDO::PARAM_BOOL;
    //           case is_null($value):
    //             $type = PDO::PARAM_NULL;
    //             break;
    //           default:
    //           $type = PDO::PARAM_STR;    
    //       }
    //   }
      $this->stmt->bindParam($param, $value);
  }

  //Execute the prepared statement
  public function execute(){
      $this->stmt->execute();
  }

  //Get result set as array of objects 
  public function resultSet(){
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }

  // get single record as object
  public function singleResult(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
    
  }

  //get row count 
  public function rowCount (){
      return $this->stmt->rowCount();
  }

}