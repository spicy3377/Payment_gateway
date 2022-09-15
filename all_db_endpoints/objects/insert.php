<?php
class Insert{
  
    // database connection and table name
    private $conn;
    private $table_name = "users";
  
    // object properties
    public $unique_id;
    public $auto_name;
    public $email;
  
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
// create customer
function create(){
  
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                auto_name=:auto_name, email=:email, unique_id=:unique_id";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->auto_name=($this->auto_name);
    $this->unique_id=($this->unique_id);
    $this->email=($this->email);
    
    // bind values
    $stmt->bindParam(":auto_name", $this->auto_name);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":unique_id", $this->unique_id);
   
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
      
}
}