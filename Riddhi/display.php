<?php
include 'db.php';
$sql = "SELECT * FROM riddhi";
$result = mysqli_query($conn, $sql);
?>


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
    <div class="container"><br><br>
        <div class="col-md-9">
            <button class="btn btn-primary" type="submit"><a style=" color: white;" href="addForm.php">ADD</a></button><br><br>
        </div>
        <div class="col-md-3"></div>

        <div class="col-md-12" id="result">
            <table class="table"><br><br>
                <thead>
                    <tr>
                        <th>SN.</th>
                        <th>Username</th>
                        <th>password</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    while ($res = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $count++; ?> </td>
                            <td><?php echo $res['username']; ?></td>
                            <td><?php echo $res['password']; ?></td>
                            <td><button class="btn btn-danger"><a style=" color: white;" href="deleteData.php?id=<?php echo $res['id']; ?>">DELETE </a></button></td>
                            <td><button class="btn btn-success"><a  style=" color: white;" href="update.php?id=<?php echo $res['id']; ?>"> UPDATE </a></button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>