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
		<h2><u>Data Wali Kelas</u></h2><br>
        <div class="col-lg-10">
            <div class="col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <a href="tambah.php" class="btn btn-success" align="center"><span class="fa fa-pencil"></span>Add</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Wali Kelas</th>
                                            <th>Nama Guru</th>
                                            <th>Kelas</th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
	                                <?php
	                                    while ($row = mysql_fetch_array($qry)) 
	                                    {
	                                        echo "<tr>";
	                                        "<div>";
	                                            echo "<td>".$row["kode"]."</td>";
	                                            echo "<td>".$row["nama"]."</td>";
	                                            echo "<td>".$row["kelas"]."</td>";
	                                            echo "<td>".$row["tahun"]."</td>";
	                                            echo "<td><a href=read.php?vkode=".$row["kode"]." class='btn btn-primary'><span class='fa fa-file-o'></span>Read</td>";
	                                            echo "<td><a href=edit.php?vkode=".$row["kode"]." class='btn btn-warning'><span class='fa fa-edit'></span>Edit</td>";
	                                            echo "<td><a href=delete.php?vkode=".$row["kode"]." class='btn btn-danger'><span class='fa fa-trash-o'></span>Delete</td>";  
	                                        echo "</tr>";
	                                    }
	                                ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
	</html>
<?php
include('footer.php');
?>
