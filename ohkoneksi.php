<html>
<head>
<title>Contoh Koneksi Database</title>
</head>
<body>
<b>
<?php
$host='localhost';
$username='root';
$password='';
$koneksi=mysql_connect($host,$username,$password);
if($koneksi)
{echo"Isthie, Koneksi Server Anda Berhasil <br><br>";}
else
{echo"Isthie, Anda Gagal Koneksi Ke Server <br><br>";}
$database='isthie_online';
$mydb=mysql_select_db($database,$koneksi);
if ($mydb)
{echo"Isthie, Anda berhasil memilih database <br><br>";}
else
{echo"Isthie, Anda Tidak Dapat memilih database <br><br>";}
?>
</b>
</body>
</html>
