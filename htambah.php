<?php
include('header.php');
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Sekolah</title>
	</head>
	<body>

<?php

					$vkode = $_POST ['txtkode'];
					$vnama = $_POST ['txtnama'];
					$vkelas = $_POST ['txtkelas'];
					$vtahun = $_POST ['txttahun'];

				$conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
				mysql_select_db("sekolah",$conn);
				$strSQL = "insert into tbsekolah (kode,nama,kelas,tahun) values ('$vkode','$vnama','$vkelas','$vtahun')";
				$qry = mysql_query($strSQL,$conn) or die ("Query salah");
?>

			Data Sudah Diinput
			<a href="index.php"> Kembali </a>

	</body>
	</html>
<?php
include('footer.php');
?>