<?php
$act = $_GET['act'];

if($act == 'save'){
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    
    $query = $db->query("INSERT INTO siswa (nis, nama_siswa, tempat_lahir, tgl_lahir, jenis_kelamin)
                    VALUE ('$nis','$nama_siswa','$tempat_lahir','$tgl_lahir','$jenis_kelamin')");
    if($query){
        echo "<script>
            alert('Data sukses disimpan');
            window.location.href='" . base_url() . "index.php?page=siswa';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal disimpan');
        window.location.href='" . base_url() . "index.php?page=siswa&act=input';
    </script>";
        }
} else if ($act == 'update') {
    $nis_old = $_POST['nis_old'];
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $query = $db->query("UPDATE siswa SET nis = '$nis', nama_siswa = '$nama_siswa', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin' WHERE nis='$nis_old'");

    if($query){
        echo "<script>
            alert('Data sukses diubah');
            window.location.href='" . base_url() . "index.php?page=siswa';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal diubah');
        window.location.href='" . base_url() . "index.php?page=siswa';
    </script>";
        }
} else if ($act == 'hapus') {
    $nis = $_GET['nis'];
    $query = $db->query("DELETE FROM siswa WHERE nis = '$nis'");
    if($query){
        echo "<script>
            alert('Data sukses dihapus');
            window.location.href='" . base_url() . "index.php?page=siswa';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal dihapus');
        window.location.href='" . base_url() . "index.php?page=siswa';
    </script>";
        }
} else {
    echo "<script>
    alert('maaf, parameter anda tidak valid');
    window.location.href='" . base_url() . "index.php?page=siswa';
</script>";
}
