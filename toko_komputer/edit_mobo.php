<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $merk_mobo=$_POST['merk_mobo'];
    $seri_mobo=$_POST['seri_mobo'];
    $socket=$_POST['socket'];
    $id_pelanggan_mobo=$_POST['id_pelanggan_mobo'];
    $id_penjual_mobo=$_POST['id_penjual_mobo'];

    // update user data
    $result = mysqli_query($db, "UPDATE mobo SET id='$id',merk_mobo='$merk_mobo',seri_mobo='$seri_mobo',socket='$socket',id_pelanggan_mobo='$id_pelanggan_mobo',id_penjual_mobo='$id_penjual_mobo' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: mobo_admin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch user data based on id
$result = mysqli_query($db, "SELECT * FROM mobo WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $merk_mobo = $user_data['merk_mobo'];
    $seri_mobo = $user_data['seri_mobo'];
    $socket = $user_data['socket'];
    $id_pelanggan_mobo = $user_data['id_pelanggan_mobo'];
    $id_penjual_mobo = $user_data['id_penjual_mobo'];
}
?>
<html>
<head>  
    <title>Edit Data Mobo</title>
</head>

<body>
    <a href="mobo_admin.php">Kembali</a>
    <br/><br/>


    <form name="update_user" method="post" action="edit_mobo.php">
        <table border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="id" value=<?php echo $id;?>></td>
            </tr>
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk_mobo" value=<?php echo $merk_mobo;?>></td>
            </tr>
            <tr> 
                <td>Seri</td>
                <td><input type="text" name="seri_mobo" value=<?php echo $seri_mobo;?>></td>
            </tr>
            <tr> 
                <td>Socket</td>
                <td><input type="text" name="socket" value=<?php echo $socket;?>></td>
            </tr>
            <tr> 
                <td>Id Pelanggan</td>
                <td><input type="text" name="id_pelanggan_cpu" value=<?php echo $id_pelanggan_mobo;?>></td>
            </tr>
            <tr> 
                <td>Id Penjual</td>
                <td><input type="text" name="id_penjual_cpu" value=<?php echo $id_penjual_mobo;?>></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
