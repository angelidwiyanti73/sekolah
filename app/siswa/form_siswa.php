<?php

$act = isset($_GET['act']) ? $_GET['act'] : false;
$nis = isset($_GET['nis']) ? $_GET['nis'] : false;

if($act == 'edit'){
    $url = base_url(). "index.php?page=siswa&act=update";
    if($nis){
        $query = $db->query("SELECT * FROM siswa WHERE nis ='$nis'");
        $row = $query->fetch_array();
    }else{  
        echo "<script>
            alert('Parameter nis tidak valid');
            window.location.href='" . base_url() . "index.php?page=prodi'; 
        </script>";
    }
}
else{
    $url = base_url(). "index.php?page=siswa&act=save";
}
?>

        <div class="card">
            <div class="card-header">
                Input Data Siswa
            </div>
                <div class="card-body">
                    <form action="<?php echo $url; ?>" method="post">
                        <input type="hidden" name="nis_old" id="nis_old" value="<?php echo isset($row) ? $row['nis'] : '';?>">
                        <div class="mb-3">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" name="nis" id="nis" value="<?php echo isset($row) ? $row['nis'] : '';?>">
                        </div> 
                        <div class="mb-3">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="<?php echo isset($row) ? $row['nama_siswa'] : '';?>">
                        </div> 
                        <div class="mb-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo isset($row) ? $row['tempat_lahir'] : '';?>">
                        </div> 
                        <div class="mb-3">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo isset($row) ? $row['tgl_lahir'] : '';?>">
                        </div> 
                        <div class="mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo isset($row) ? $row['jenis_kelamin'] : '';?>">
                        </div> 
                        <div class="mb-3">
                            <a class="btn btn-danger btn-sm float-start" href="list_siswa.php"><i class="fa-solid fa-angles-left"></i> Kembali</a>
                            <button class="btn btn-primary btn-sm float-end" type="submit"><i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
                        </div> 
                    </form>
                </div>
            </div>
        