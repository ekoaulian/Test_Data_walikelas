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
	include('koneksi.php');
	?>
	<div class="container">
		<h3><u>Tambah Data</u></h3><br>
		<form action="htambah.php" method="post">
        <div class="col-lg-10">
            <div class="col-md-offset-1">
                        <div class="form-group">
                            <label><b>Kode Wali Kelas</b></label>
                            <input type="text" name="txtkode"class="form-control">
                        </div>
                        <div class="form-group">
                            <label><b>Nama Guru</b></label>
                            <input type="text" name="txtnama"class="form-control">
                        </div>
                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select name="txtkelas" class="form-control">
                                                <option>tm1</option>
                                                <option>tm2</option>
                                                <option>tm3</option>
                                                <option>tm4</option>
                                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>Tahun</b></label>
                            <input type="text" name="txttahun"class="form-control">
                        </div>
            </div>
                           
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <button type="submit" class="btn btn-info">Simpan</a></button>
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
