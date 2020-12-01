
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
</head>
<body>
<div align='center'>
    <br>
    <h4>Daftar CPU</h4>

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

    <table width='50%' border=1>
        <br>
        <thead>
        <tr>
            
            <th>Platform</th>
            <th>CPU</th>
            <th>Socket</th>

        </tr>
        </thead>
        <?php

        include "config.php";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
            $sql="select * from cpu where seri_cpu like '%".$kata_kunci."%' or platform like '%".$kata_kunci."%' or socket like '%".$kata_kunci."%' order by id asc";

        }else {
            $sql="select * from cpu order by id asc";
        }


        $hasil=mysqli_query($db,$sql);
       
        while ($data = mysqli_fetch_array($hasil)) {
            

            ?>
            
            <tr>
                <td><?php echo $data["platform"]; ?></td>
                <td><?php echo $data["seri_cpu"];   ?></td>
                <td><?php echo $data["socket"];   ?></td>
            </tr>
           
            <?php
        }
        ?>
    </table>
    <br></br>
    <a href="index.php">Kembali</a><br/><br/>
</div>

</body>
</html>