
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
</head>
<body>
<div align='center'>
    <br>
    <h4>Paket Komplit</h4>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div align='center'>
        
        <?php
        $kata_kunci="";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
        }
        ?>
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>"/>
    </div>
    <div align='center'>
        <td></td>
        <input type="submit" value="Cari">
    </div>
    </form>

    <table width='65%' border=1>
        <br>
        <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Platform</th>
            <th>CPU</th>
            <th>Merk Mobo</th>
            <th>Seri Mobo</th>
            <th>Merk GPU</th>
            <th>Seri GPU</th>

        </tr>
        </thead>
        <?php

        include "config.php";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
            $sql="select * from paket_komplit where username like '%".$kata_kunci."%' or platform like '%".$kata_kunci."%' or seri_cpu like '%".$kata_kunci."%' or merk_mobo like '%".$kata_kunci."%' or seri_mobo like '%".$kata_kunci."%' or merk_gpu like '%".$kata_kunci."%' or seri_gpu like '%".$kata_kunci."%' order by id asc";

        }else {
            $sql="select * from paket_komplit order by id asc";
        }


        $hasil=mysqli_query($db,$sql);
       
        while ($data = mysqli_fetch_array($hasil)) {
           

            ?>
            
            <tr>
                <td><?php echo $data["id"]; ?></td>
                <td><?php echo $data["username"]; ?></td>
                <td><?php echo $data["platform"]; ?></td>
                <td><?php echo $data["seri_cpu"];   ?></td>
                <td><?php echo $data["merk_mobo"];   ?></td>
                <td><?php echo $data["seri_mobo"]; ?></td>
                <td><?php echo $data["merk_gpu"]; ?></td>
                <td><?php echo $data["seri_gpu"]; ?></td>
            </tr>
           
            <?php
        }
        ?>
    </table>
    <br></br>
    <a href="index_admin.php">Kembali</a><br/><br/>
</div>

</body>
</html>