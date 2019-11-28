<?php include "db.php";?>

<?php

function createRows()
{
    global $connection;
    if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id']; 


    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');    

        if(!$connection) {
        die("Database connection failed");
        }


        $query = "INSERT INTO users(id,username,password)";
        $query .= "VALUES('$id','$username','$password')";

        $result = mysqli_query($connection,$query);

        if(!$result){
            die('Query Failed' .mysqli.error());
        }
        else{
            echo "Record Created Successfully";
        }
    }
}

function showAllData(){
    global $connection;
     $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed'.mysqli_error());
    }

      while($row = mysqli_fetch_assoc($result)){
            $id=$row['id'];
            echo "<option value='$id'>$id</option>";
      }                 
                    
}

function updateTable(){
        global $connection;
        if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password ='$password' ";
        $query .= "WHERE id = $id ";
        
        $result =mysqli_query($connection,$query);
        if(!$result){
            die("Query Failed" . mysqli_error($connection));
        }
       else{
            echo "Update Record Successfully";
        }
    }
}

function deleteRows(){
        global $connection;
        if(isset($_POST['submit'])){
//        $username = $_POST['username'];
//        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";
        
        $result =mysqli_query($connection,$query);
        if(!$result){
            die("Query Failed" . mysqli_error($connection));
        }
        else{
            echo "Delete Record Successfully";
        }
    }
}
   
?>