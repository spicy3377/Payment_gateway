<?php
class Product{
  
    // database connection and table name
    private $conn;
    private $table_name = "users";
  
    // object properties
    public $id;
    public $name;
    public $email;
  
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // read customers
function read(){
  
    // select all query
    $query = "SELECT
                auto_name, unique_id, email
            FROM
                " . $this->table_name . "
                
            ORDER BY
                id DESC";

                
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}


}
?>