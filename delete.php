<html>
<body>
<?php
include_once("ohkoneksi.php");
$id=5;
$delete=mysql_query("delete from tamu where id='$id'");
if($delete)
{echo"Berhasil Menghapus Data dengan id $id";}
else
{echo"Gagal Menghapus Data";}
?>
</body>
</html>
