<?php
/*
*PDO database class
*connect to data base 
*create pepare stetment
*bind values
*returan rows and result
*/

class database{
    private $host=DB_HOST;
    private $user=DB_USER;
    private $pass=DB_PASS;
    private $dbname=DB_NAME;

    private $dbh;
    private $stmt;
    private $error;
    
    public function __construct(){
        // set dsn
        $dsn='mysql:host='.$this->host .';dbname='.$this->dbname;

        $option=array(
         PDO::ATTR_PERSISTENT=>true,
         PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION


        );
        
       //creat pdo instance
       try {
        
       $this->dbh=new PDO($dsn,$this->user,$this->pass,$option);

       } catch (PDOExcepton $e) {

        $this->error=$e->getMessage();
         echo $this->error;

       }

    }

     //pepare stetment with qury
     public function query($sql){
        $this->stmt=$this->dbh->prepare($sql);
     }

    // bind value
    public function bind($param,$value,$type=NULL){
        if(is_null(type)){
            switch(true){
                case is_int($value):
                    $type=PDO ::PARAM_INT;
                    break;

                case is_bool($value):
                    $type=PDO ::PARAM_BOOL;
                    break;

                case is_null($value):
                    $type=PDO ::PARAM_NULL;
                    break;

                default:
                    $type=PDO ::PARAM_STR;
                    
            }
    
        }
       $this->stmt->bindValue($param,$value,$type);
             
    }

   // execute the prepared statement
   public function execute(){
     return $this->stmt->execute();

   }

  // get result set as array of object
  public function resultSet(){
    $this->execute();
    return  $this->stmt->fetchAll(PDO ::FETCH_OBJ);
  }
  // get single recode as object
  public function singel(){
    $this->execute();
    return  $this->stmt->fetch(PDO ::FETCH_OBJ);
  }

   // get row count
   public function rowCount(){
    return $this-stmt->rowCount();
   }


}