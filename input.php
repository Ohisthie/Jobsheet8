<html>
<body>
<?php
include_once("ohkoneksi.php");
$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
VALUES(1,'Lis','Kendal','lis@gmail.com','Sipp...')");

$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
VALUES(2,'isti','Kendal','isthieolivia@gmail.com','Good Job')");

$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
VALUES(3,'Isthie','Kendal','Isthie@gmail.com','Woe')");

$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
VALUES(4,'Gendut','Kendal','ndut@gmail.com','Enjoy')");

$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
VALUES(5,'Kurus','Kendal','rus@gmail.com','Jos')");


if($insert)
{echo"Berhasil menyisipkan data pada tabel tamu";}
else
{echo"Gagal penyisipan data";}
?>
</body>
</html>