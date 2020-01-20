<?php
// Create database connection using config file
include_once("connection.php");

// Fetch all users data from database
// $query=("select * from data_pribadi where id_alumni='$_GET[id]'");
// $r= mysqli_fetch_array(mysqli_query($link,$query));
$result = mysqli_query($mysqli, "SELECT * FROM tracer_study ORDER BY id_alumni DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="kuesioner.php">Add New Input Data Mahasiswa</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>NRP</th> <th>Nama Lengkap</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($jumlah_data = mysqli_query($result)) {         
        echo "<tr>";
        echo "<td>".$jumlah_data['id_alumni']."</td>";
        echo "<td>".$jumlah_data['nama']."</td>";
        echo "<td>".$jumlah_data['email']."</td>";    
        echo "<td><a href='Edit.php?id=$jumlah_data[id]'>Edit</a> | <a href='delete.php?id=$jumlah_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>