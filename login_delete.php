<?php include "db.php";?>
<?php include "functions.php";?>  

<?php deleteRows(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Delete Operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body><br>
    <div class="container">

        <div class="col-sm-6">
           <h1 class="text-center">Delete</h1>
            <form action="login_delete.php" method="post">
<!--
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
-->
                <div>
                    Select Id To Delete a Record <select name="id" id="">
                   <?php
                    showAllData();    
                    ?>

                    </select>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" name="submit" value="Delete">
            </form>
        </div>
</body>

</html>