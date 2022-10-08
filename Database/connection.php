<?php


class Database{
    public $server = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "studentmanagement";
    
    public $connection;
    public $table = "school";


     function __Construct(){
        $this->connection = new mysqli($this->server, $this->username, $this->password, $this->database);
    }

    

     function Add($fullname, $dateofbirth, $gender, $address, $mobile, $fathers, $mothers, $class){
       
        $insertquery = "INSERT INTO $this->table (FullName, DateofBirth, Gender, Address, Mobilenumber, MothersName, Fathersname, Class)VALUES('$fullname', '$dateofbirth', '$gender', '$address', '$mobile', '$fathers', '$mothers', '$class')";

        $insertdata = $this->connection->query($insertquery);

        if($insertdata){
            return true;
        }
    }

    
    // display the data
    function Display(){
        $display = "SELECT *FROM $this->table";
        $displayquery = $this->connection->query($display);

        if($displayquery-> num_rows > 0){
            return $displayquery;
        }else{
            return false;
        }
    }

    function Delete($id){
        $delete =  "DELETE FROM $this->table WHERE ID = $id";
        $deletequery = $this->connection->query($delete);

        if($deletequery){
            return true;
        }else{
            return false;
        }
    }
        
    // update function 
      
    function Update($idupdate, $fullname, $dateofbirth, $gender, $address, $mobile, $fathers, $mothers, $class){
        $updat = "UPDATE $this->table SET FullName = '$fullname', DateofBirth = '$dateofbirth', Gender = '$gender', Address = '$address', Mobilenumber = '$mobile',
        MothersName = '$mothers', Fathername = '$fathers', Class = '$class' WHERE ID = $idupdate";

        $update_query = $this->connection->query($updat);

        if($update_query){
            return true;
        }else{
            return false;
        }
    }
    
}
?>