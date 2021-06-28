<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<div align="center">
        <form action="<?php echo site_url('control_data/insert')?>" method="post">
            <table width="349" border="1">
                <tr>
                    <td colspan="2"><div align="center">Edit Data Dosen</div></td>
                </tr>
                <tr>
                    <td width="93">NIDN:</td>
                    <td width="240"><input type="text" name="nidn" value="<?php echo $data_edit->nidn; ?>" / size="40"></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td><input type="text" name="nama" value="<?php echo $data_edit->nama; ?>" / size="40"></td>
                </tr>
                <tr>
                    <td>Bidang Ilmu</td>
                    <td><input type="text" name="bidang_ilmu" value="<?php echo $data_edit->bidang_ilmu; ?>" / size="40"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $data_edit->alamat; ?>" / size="40"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="update"><input type="reset" value="reset"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>