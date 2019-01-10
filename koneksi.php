<?php
                $conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
                mysql_select_db("sekolah",$conn);
                $strSQL = "select * from tbsekolah";
                $qry = mysql_query($strSQL,$conn) or die ("query salah");
?>