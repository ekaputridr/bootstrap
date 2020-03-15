<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="../assets/bootstrap-4.4.1-dist/css/bootstrap.css">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="../index.html">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="data.php">Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
</nav>

<br><br><br><br>

<div class="container">
    <h2>Registrant Data Table</h2>
    <p>data from admins that have been registered and stored in the database</p>            
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Name</th>
                <th>Year of Birth</th>
                <th>City</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>

    <?php
    include "koneksi.php";
    $query = "select * from dataa";
    $sql = mysqli_query($connect,$query);

    while($adm_data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$adm_data['nik']."</td>";
        echo "<td>".$adm_data['nama']."</td>";
        echo "<td>".$adm_data['birth']."</td>";
        echo "<td>".$adm_data['city']."</td>";
        echo "<td>".$adm_data['email']."</td>";
        echo "<td>".$adm_data['pwd']."</td>";
        echo "<td><a href='form_edit.php?id_user=".$adm_data['nik']."'>Edit |</a>";
        echo "<a href='delete.php?id_user=".$adm_data['nik']."'> Hapus</a></td>";
     
    }
    ?>
  </table>
</div>

<script src="../assets/bootstrap-4.4.1-dist/js/bootstrap.js"></script>
    
</body>
</html>