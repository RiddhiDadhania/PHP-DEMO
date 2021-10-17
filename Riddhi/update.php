<html>

<head>
    <title>DEMO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php
            include 'db.php';
            $sql =  "SELECT * FROM riddhi where id={$_GET['id']}";
            $result = mysqli_query($conn, $sql);
            $row = $result->fetch_assoc();

            ?>
            <h2>UPDATE FORM</h2><br>
            <form action="updateData.php" method="POST">
                <div class="form-group">
                    <input type="hidden" value="<?php echo $row['id']; ?>" class="form-control" name="id">
                    <label>User Name</label>
                    <input type="text" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Enter name" name="username">
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" value="<?php echo $row['password']; ?>" class="form-control" placeholder="Enter password" name="password">

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

</body>

</html>