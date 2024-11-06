<?php 
include("Config.php");
if(isset($_GET['nis'])){
    $nis = $_GET['nis'];
    $sql = "DELETE FROM t_siswa WHERE nis=$nis";
    $sql = mysqli_query($db, $sql) or die(mysqli_error($db));
    if($query){
        header('location:index.php?status=sukses');
    }else{
        header('location:index.php?status=gagal');
    }
}else{
    die("Akses dilarang ....");
}
?>