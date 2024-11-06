 <?php
    include("Config.php");
    if (isset($_GET['nis'])) {
        $title = "Edit";
        $url = 'proses_edit.php';
        $id = $_GET['nis'];

        $sql = "SELECT * FROM t_siswa WHERE nis = $id";
        $query = mysqli_query($db, $sql);
        $siswa = mysqli_fetch_assoc($query);

        if (mysqli_num_rows($query) < 1) {
            die("data tidak ditemukan ....");
        }
    } else {
        $title = "Add";
        $url = 'proses_pendaftaran.php';
    }
    ?>