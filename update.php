<html>
<body>
<?php
include_once("ohkoneksi.php");
$update=mysql_query("update tamu set nama='ohisthie' where id=2");

if($update)
{echo"Berhasil mengapdate data pada tamu";}
else
{echo"Gagal menghapus data";}
?>
</body>
</html>
