<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter</title>
</head>
<body>
    <table border="1px" align="center" cellpadding="2" cellspacing="2">
        <h2 align="center">DATA BUKU</h2>
        <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>PENGARANG</th>
            <th>TAHUN TERBIT</th>
        </tr>
        <?php
            $no = 1 ;
            for ($i=0 ; $i<count($data_buku) ; $i++){
                echo "<tr>" ;
                echo "<td>".$no."</td>" ;
                echo "<td>".$data_buku[$i]['judul']."</td>" ;
                echo "<td>".$data_buku[$i]['pengarang']."</td>" ;
                echo "<td>".$data_buku[$i]['tahun']."</td>" ;
                echo "</tr>" ;
                $no++ ;
            }
        ?>
    </table>
</body>
</html>