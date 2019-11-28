<?php
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
        echo "Successfully connected";
    }
    else{
        echo "connnection Failed";
    }
    
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed'.mysqli_error());
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Read Operation</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-6">
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    ?>
            <pre>
                       <?php
                        print_r($row);
                        ?>
                    </pre>
            <?php    
                    
                }
                ?>
        </div>
    </div>
</body>

</html>
