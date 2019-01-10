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
                $conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
                mysql_select_db("sekolah",$conn);
                $strSQL = "select * from tbsekolah where kode='$_GET[vkode]' ";
                $qry = mysql_query($strSQL,$conn) or die ("query salah");
                $row=mysql_fetch_array($qry);
    ?>
	<div class="container">
		<h3><u>Edit Data</u></h3><br>
		<form action="hedit.php" method="post">
        <div class="col-lg-10">
            <div class="col-md-offset-1">
                        <div class="form-group">
                            <label><b>Kode Wali Kelas</b></label>
                            <input type="text" name="txtkode"class="form-control" value="<?php echo $row['kode'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label><b>Nama Guru</b></label>
                            <input type="text" name="txtnama"class="form-control" value="<?php echo $row['nama'];?>">
                        </div>
                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select name="txtkelas" class="form-control" value="<?php echo $row['kelas'];?>">
                                                <option>tm1</option>
                                                <option>tm2</option>
                                                <option>tm3</option>
                                                <option>tm4</option>
                                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>Tahun</b></label>
                            <input type="text" name="txttahun"class="form-control" value="<?php echo $row['tahun'];?>">
                        </div>
            </div>
                           
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <button type="submit" class="btn btn-info">Update</a></button>
                                <a href="index.php" class="btn btn-danger">Batal</a>
                        </div>
        </div>
        </form> 
        </div>
                            
	</body>
	</html>
<?php
include('footer.php');
?>
