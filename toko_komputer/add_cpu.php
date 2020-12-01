<html>
<head>
    <title>Tambah CPU</title>
</head>

<body>
    <a href="cpu_admin.php">Kembali</a>
    <br/><br/>


    <form action="add_cpu.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Platform</td>
                <td><input type="text" name="platform"></td>
            </tr>
            <tr> 
                <td>CPU</td>
                <td><input type="text" name="seri_cpu"></td>
            </tr>
            <tr> 
                <td>Socket</td>
                <td><input type="text" name="socket"></td>
            </tr>
            <tr> 
                <td>Id Pelanggan</td>
                <td><input type="text" name="id_pelanggan_cpu"></td>
            </tr>
            <tr> 
                <td>Id Penjual</td>
                <td><input type="text" name="id_penjual_cpu"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $platform = $_POST['platform'];
        $seri_cpu = $_POST['seri_cpu'];
        $socket = $_POST['socket'];
        $id_pelanggan_cpu = $_POST['id_pelanggan_cpu'];
        $id_penjual_cpu = $_POST['id_penjual_cpu'];

        // include database connection file
        include_once("config.php");

        //Insert user data into table
        $result = mysqli_query($db, "INSERT INTO cpu(id,platform,seri_cpu,socket,id_pelanggan_cpu,id_penjual_cpu) VALUES('$id','$platform','$seri_cpu','$socket','$id_pelanggan_cpu','$id_penjual_cpu')");

        // Show message when user added
        echo "Berhasil Ditambahkan. <a href='cpu_admin.php'>Lihat Hasil</a>";
    }
    ?>
</body>
</html>
