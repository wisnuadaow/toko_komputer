<html>
<head>
    <title>Tambah Mobo</title>
</head>

<body>
    <a href="mobo_admin.php">Kembali</a>
    <br/><br/>


    <form action="add_mobo.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk_mobo"></td>
            </tr>
            <tr> 
                <td>Seri</td>
                <td><input type="text" name="seri_mobo"></td>
            </tr>
            <tr> 
                <td>Socket</td>
                <td><input type="text" name="socket"></td>
            </tr>
            <tr> 
                <td>Id Pelanggan</td>
                <td><input type="text" name="id_pelanggan_mobo"></td>
            </tr>
            <tr> 
                <td>Id Penjual</td>
                <td><input type="text" name="id_penjual_mobo"></td>
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
        $merk_mobo = $_POST['merk_mobo'];
        $seri_mobo = $_POST['seri_mobo'];
        $socket = $_POST['socket'];
        $id_pelanggan_mobo = $_POST['id_pelanggan_mobo'];
        $id_penjual_mobo = $_POST['id_penjual_mobo'];

        // include database connection file
        include_once("config.php");

        //Insert user data into table
        $result = mysqli_query($db, "INSERT INTO mobo(id,merk_mobo,seri_mobo,socket,id_pelanggan_mobo,id_penjual_mobo) VALUES('$id','$merk_mobo','$seri_mobo','$socket','$id_pelanggan_mobo','$id_penjual_mobo')");

        // Show message when user added
        echo "Berhasil Ditambahkan. <a href='mobo_admin.php'>Lihat Hasil</a>";
    }
    ?>
</body>
</html>
