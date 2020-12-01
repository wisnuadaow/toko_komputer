<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $platform=$_POST['platform'];
    $seri_cpu=$_POST['seri_cpu'];
    $socket=$_POST['socket'];
    $id_pelanggan_cpu=$_POST['id_pelanggan_cpu'];
    $id_penjual_cpu=$_POST['id_penjual_cpu'];

    // update user data
    $result = mysqli_query($db, "UPDATE cpu SET id='$id',platform='$platform',seri_cpu='$seri_cpu',socket='$socket',id_pelanggan_cpu='$id_pelanggan_cpu',id_penjual_cpu='$id_penjual_cpu' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: cpu_admin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch user data based on id
$result = mysqli_query($db, "SELECT * FROM cpu WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $platform = $user_data['platform'];
    $seri_cpu = $user_data['seri_cpu'];
    $socket = $user_data['socket'];
    $id_pelanggan_cpu = $user_data['id_pelanggan_cpu'];
    $id_penjual_cpu = $user_data['id_penjual_cpu'];
}
?>
<html>
<head>  
    <title>Edit Data CPU</title>
</head>

<body>
    <a href="cpu_admin.php">Kembali</a>
    <br/><br/>


    <form name="update_user" method="post" action="edit_cpu.php">
        <table border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="id" value="<?php echo $id;?>"></td>
            </tr>
            <tr> 
                <td>Platform</td>
                <td><input type="text" name="platform" value="<?php echo $platform;?>"></td>
            </tr>
            <tr> 
                <td>CPU</td>
                <td><input type="text" name="seri_cpu" value="<?php echo $seri_cpu;?>"></td>
            </tr>
            <tr> 
                <td>Socket</td>
                <td><input type="text" name="socket" value="<?php echo $socket;?>"></td>
            </tr>
            <tr> 
                <td>Id Pelanggan</td>
                <td><input type="text" name="id_pelanggan_cpu" value="<?php echo $id_pelanggan_cpu;?>"></td>
            </tr>
            <tr> 
                <td>Id Penjual</td>
                <td><input type="text" name="id_penjual_cpu" value="<?php echo $id_penjual_cpu;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
