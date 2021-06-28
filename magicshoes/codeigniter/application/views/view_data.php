<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CRUD CI</title>
</head>
<body>
    <div align="center">
        <table width="827" height="117" border="1">
            <tr>
                <td height="41" colspan="7"><?php echo anchor('control_data/tambah','Tambah Data Dosen'); ?></td>
            </tr>
            <tr align="center">
                <td height="32">No.</td>
                <td>NIDN</td>
                <td>NAMA</td>
                <td>BIDANG ILMU</td>
                <td>ALAMAT</td>
                <td colspan="2">Aksi</td>
            </tr>
            <?php
                $i = 1 ;
                foreach($data_dosenn as $row) {
            ?>
                <tr align="center">
                    <td><?php echo $i ; ?></td>
                    <td><?php echo $row['nidn']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['bidang_ilmu']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo anchor('control_data/edit/'.$row['nidn'],'Edit'); ?></td>
                    <td><?php echo anchor('control_data/hapus/'.$row['nidn'],'Hapus'); ?></td>
                </tr>
                <?php $i++ ; } ?>
        </table>
    </div>
</body>
</html>