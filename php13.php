<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>DATABASE</h3>
<table border="2">  
<tr>
    <th>NISN</th>
    <th>id_nilai</th>
    <th>nama</th>
    <th>kelas</th>
</tr>
<?php
 include "koneksi1.php";
 $ambil = mysqli_query($koneksi,"select * from siswa");
 $no = 1;
 while($tampil = mysqli_fetch_array($ambil)){
 echo"
 <tr>
     <td>$tampil[NISN]</td>
     <td>$tampil[id_nilai]</td>
     <td>$tampil[nama]</td>
     <td>$tampil[kelas]</td>
</tr>";
 }

?>
</table>
</body>
</html>