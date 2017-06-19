<html>
<body>
<?php
include_once("ohkoneksi.php");
$tabel=mysql_query("CREATE TABLE tamu1(
id INT NOT NULL,
nama VARCHAR(30) NOT NULL,
alamat VARCHAR(50) NOT NULL,
email VARCHAR(30) NOT NULL,
komentar VARCHAR(225) NOT NULL,
PRIMARY KEY(id))");

if($tabel)
{echo"Isthie berhasil membuat tabel tamu melalui script php";}
else
{echo"Isthie Gagal membuat tabel";}
?>
</body>
</html>
