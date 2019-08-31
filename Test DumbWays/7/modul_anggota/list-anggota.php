<?php

// ... ambil data dari database
include 'proses-list-anggota.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container clearfix">
        <h1>Biodata</h1>

        <?php include '../sidebar.php' ?>

        <div class="content">
            <h1>Daftar Anggota</h1>
            <div class="btn-tambah-div">
                <a href="biodata.php"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <?php if (empty($data_anggota)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>No. Telp/Hp</th>
                    <th>Alamat</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Agama</th>
                    <th>Hobby</th>
                    <th width="20%">Pilihan</th>
                </tr>
                <?php foreach ($data_anggota as $users) : ?>
                <tr>
                    <td><?php echo $users['full_name'] ?></td>
                    <td><?php echo $users['place_of_birth_id'] ?></td>
                    <td><?php echo $users['phone_number'] ?></td>
                    <td><?php echo $users['addres'] ?></td>
                    <td><?php echo $users['last_educaton'] ?></td>
                    <td><?php echo $users['religion'] ?></td>
                    <td><?php echo $users['hobbies'] ?></td>
                    <td>
                        <a href="edit-anggota.php?id_anggota=<?php echo $anggota['anggota_id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="delete-anggota.php?id_anggota=<?php echo $anggota['anggota_id']; ?>" class="btn btn-hapus" onclick="return confirm('anda yakin akan menghapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php  endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>
