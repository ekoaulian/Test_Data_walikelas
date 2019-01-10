<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
		<head>
			<title>delete proses</title>
		</head>
		<body>

<?php

				$vkode = $_POST ['txtkode'];

				$conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
				mysql_select_db("sekolah",$conn);
				$strSQL = "delete from tbsekolah where kode='$vkode'";
				$qry = mysql_query($strSQL,$conn) or die ("query salah");
							
			?>

			Data sudah di dihapus
			<a href="index.php">Oke</a>

		</body>
</html>
<?php
include('footer.php');
?>