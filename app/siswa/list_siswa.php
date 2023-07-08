
        <div class="card">
            <div class="card-header">
                Data Siswa
            </div>
            <div class="card-body">
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url().'index.php?page=siswa&act=input'; ?>"><i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
                <?php
                $query = $db->query("SELECT * FROM erdsekolah.siswa");
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Tempat Lahir</th>
                            <th>Tgl Lahir</th>
                            <th>jenis kelamin</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = $query->fetch_array()){
                        ?>
                            <tr>
                                <td><?php echo $row['nis'];?></td>
                                <td><?php echo $row['nama_siswa'];?></td>
                                <td><?php echo $row['tempat_lahir'];?></td>
                                <td><?php echo $row['tgl_lahir'];?></td>
                                <td><?php echo $row['jenis_kelamin'];?></td>
                                <td><a class="btn btn-outline-success btn-sm" href="<?php echo base_url();?>index.php?page=siswa&act=edit&nis=<?php echo $row['nis']; ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url();?>index.php?page=siswa&act=hapus&nis=<?php echo $row['nis']; ?>"><i class="fa-solid fa-trash-can"></i></a> </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    