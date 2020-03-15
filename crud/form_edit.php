<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../assets/bootstrap-4.4.1-dist/css/bootstrap.css">

</head>
<body>
    
<?php

include './koneksi.php';
$nik = @$_GET['nik'];
$query = "SELECT * FROM dataa WHERE nik = '$nik'";
$result = $connect->query($query);
$row = $result->fetch_assoc();
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2>Edit Data</h2>
        <form action="update.php" method="post">
            <div class="form-group">
                <label for="nama">Name:</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter name" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="birth">Year of Birth:</label>
                    <input type="text" class="form-control" id="birth" placeholder="Enter year" name="birth" value="<?php echo $row['birth']; ?>">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="<?php echo $row['city']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $row['pwd']; ?>">
            </div>
            <input type="hidden" name="nik" value="<?php echo $row['nik']; ?>">
            <button type="submit" class="btn btn-primary">Save</button>
         </form>
    </div>
</div>


<script src="../assets/bootstrap-4.4.1-dist/js/bootstrap.js"></script>
 
</body>
</html>