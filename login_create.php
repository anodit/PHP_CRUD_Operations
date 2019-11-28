<?php include "db.php";?>
<?php include "functions.php";?>
<?php createRows(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
    <br>
    <div class="container">

        <div class="col-sm-6">
            <h1 class="text-center">CREATE</h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="number" name="id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>
</body>

</html>
