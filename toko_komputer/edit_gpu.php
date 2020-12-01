<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $merk_gpu=$_POST['merk_gpu'];
    $seri_gpu=$_POST['seri_gpu'];
    $id_pelanggan_gpu=$_POST['id_pelanggan_gpu'];
    $id_penjual_gpu=$_POST['id_penjual_gpu'];

    // update user data
    $result = mysqli_query($db, "UPDATE gpu SET id='$id',merk_gpu='$merk_gpu',seri_gpu='$seri_gpu',id_pelanggan_gpu='$id_pelanggan_gpu',id_penjual_gpu='$id_penjual_gpu' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: gpu_admin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch user data based on id
$result = mysqli_query($db, "SELECT * FROM gpu WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $merk_gpu = $user_data['merk_gpu'];
    $seri_gpu = $user_data['seri_gpu'];
    $id_pelanggan_gpu = $user_data['id_pelanggan_gpu'];
    $id_penjual_gpu = $user_data['id_penjual_gpu'];
}
?>
<html>
<head>  
    <title>Edit Data GPU</title>
</head>

<body>
    <a href="gpu_admin.php">Kembali</a>
    <br/><br/>


    <form name="update_user" method="post" action="edit_gpu.php">
        <table border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="id" value=<?php echo $id;?>></td>
            </tr>
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk_gpu" value=<?php echo $merk_gpu;?>></td>
            </tr>
            <tr> 
                <td>Seri</td>
                <td><input type="text" name="seri_gpu" value=<?php echo $seri_gpu;?>></td>
            </tr>
            <tr> 
                <td>Id Pelanggan</td>
                <td><input type="text" name="id_pelanggan_gpu" value=<?php echo $id_pelanggan_gpu;?>></td>
            </tr>
            <tr> 
                <td>Id Penjual</td>
                <td><input type="text" name="id_penjual_gpu" value=<?php echo $id_penjual_gpu;?>></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
