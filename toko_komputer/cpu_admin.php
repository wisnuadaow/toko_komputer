<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($db, "SELECT * FROM cpu ORDER BY id ASC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add_cpu.php">Tambah CPU</a><br/><br/>


    <table width='80%' border=1>

    <tr>
        <th>Id</th> <th>Platform</th> <th>CPU</th> <th>Socket</th> <th>Id Pelanggan</th> <th>Id Penjual</th> <th>Opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['platform']."</td>";
        echo "<td>".$user_data['seri_cpu']."</td>";
        echo "<td>".$user_data['socket']."</td>";
        echo "<td>".$user_data['id_pelanggan_cpu']."</td>";
        echo "<td>".$user_data['id_penjual_cpu']."</td>";    
        echo "<td><a href='edit_cpu.php?id=$user_data[id]'>Edit</a> | <a href='delete_cpu.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
