<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css/bootstrap.css">

</head>
<body>
    
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2>Sign In</h2>
        <form action="crud/data_sign.php">
            <div class="form-group">
                <label for="nik">NIK:</label>
                    <input type="text" class="form-control" id="nik" placeholder="Enter NIK" name="nik">
            </div>
            <div class="form-group">
                <label for="nama">Name:</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter name" name="nama">
            </div>
            <div class="form-group">
                <label for="birth">Year of Birth:</label>
                    <input type="text" class="form-control" id="birth" placeholder="Enter year" name="birth">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <input type="hidden" name="nik">
            <button type="submit" class="btn btn-primary">Sign In</button>
         </form>
    </div>
</div>

    <script src="./assets/bootstrap-4.4.1-dist/js/bootstrap.js"></script>

</body>
</html>