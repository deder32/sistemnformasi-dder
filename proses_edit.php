<?php 
include("Config.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nis = $_POST['nis'];
    $nama = $_POST['nama_lengkap'];
    <?php if($jk=='Laki-laki'){echo 'checked';}?>><Laki-laki
    <input name = "jenis_kelamin" type = "radio" value="Perempuan"
    <?php if($jk=='Perempuan'){echo 'checked';}?>>Perempuan
    </td> 
    <?php }else{ ?>
}
?>