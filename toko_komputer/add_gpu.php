<html>
<head>
    <title>Tambah GPU</title>
</head>

<body>
    <a href="gpu_admin.php">Kembali</a>
    <br/><br/>


    <form action="add_gpu.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>merk</td>
                <td><input type="text" name="merk_gpu"></td>
            </tr>
            <tr> 
                <td>Seri</td>
                <td><input type="text" name="seri_gpu"></td>
            </tr>
            <tr> 
                <td>Id Pelanggan</td>
                <td><input type="text" name="id_pelanggan_gpu"></td>
            </tr>
            <tr> 
                <td>Id Penjual</td>
                <td><input type="text" name="id_penjual_gpu"></td>
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
        $merk_gpu = $_POST['merk_gpu'];
        $seri_gpu = $_POST['seri_gpu'];
        $id_pelanggan_gpu = $_POST['id_pelanggan_gpu'];
        $id_penjual_gpu = $_POST['id_penjual_gpu'];

        // include database connection file
        include_once("config.php");

        //Insert user data into table
        $result = mysqli_query($db, "INSERT INTO gpu(id,merk_gpu,seri_gpu,id_pelanggan_gpu,id_penjual_gpu) VALUES('$id','$merk_gpu','$seri_gpu','$id_pelanggan_gpu','$id_penjual_gpu')");

        // Show message when user added
        echo "Berhasil Ditambahkan. <a href='gpu_admin.php'>Lihat Hasil</a>";
    }
    ?>
</body>
</html>
