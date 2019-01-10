<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Proses Edit</title>
</head>
<body>
		<?php
					$vkode = $_POST ['txtkode'];
					$vnama = $_POST ['txtnama'];
					$vkelas = $_POST ['txtkelas'];
					$vtahun = $_POST ['txttahun'];


				$conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
				mysql_select_db("sekolah",$conn);
				$strSQL = "update tbsekolah set nama='$vnama',kelas='$vkelas',tahun='$vtahun' where kode='$vkode'";
				$qry = mysql_query($strSQL,$conn) or die ("query salah");
			?>

			Data sudah di update
			<a href="index.php">Halaman Awal</a>
</body>
</html>
<?php
include('footer.php');
?>