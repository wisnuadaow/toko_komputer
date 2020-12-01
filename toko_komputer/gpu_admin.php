<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($db, "SELECT * FROM gpu ORDER BY id ASC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add_gpu.php">Tambah GPU</a><br/><br/>


    <table width='80%' border=1>

    <tr>
        <th>Id</th> <th>Merk</th> <th>Seri</th> <th>Id Pelanggan</th> <th>Id Penjual</th> <th>Opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['merk_gpu']."</td>";
        echo "<td>".$user_data['seri_gpu']."</td>";
        echo "<td>".$user_data['id_pelanggan_gpu']."</td>";
        echo "<td>".$user_data['id_penjual_gpu']."</td>";    
        echo "<td><a href='edit_gpu.php?id=$user_data[id]'>Edit</a> | <a href='delete_gpu.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
