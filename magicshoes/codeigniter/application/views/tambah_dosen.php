<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CRUD CI</title>
</head>
<body>
    <div align="center">
        <form action="<?php echo site_url('control_data/insert')?>" method="post">
            <table width="349" border="1">
                <tr>
                    <td colspan="2"><div align="center">Tambah Data Dosen</div></td>
                </tr>
                <tr>
                    <td width="93">NIDN:</td>
                    <td width="240"><input type="text" name="nidn" / size="40"></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td><input type="text" name="nama" / size="40"></td>
                </tr>
                <tr>
                    <td>Bidang Ilmu</td>
                    <td><input type="text" name="bidang_ilmu" / size="40"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" / size="40"></td>
                </tr>
                <tr align="center">
                <td colspan="2"><input type="submit" value="simpan"><input type="reset" value="reset"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>