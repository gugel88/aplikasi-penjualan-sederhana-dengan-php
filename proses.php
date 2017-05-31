<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apliksi Perhitungan Sederhana - GUGEL88.COM</title>
<style type="text/css">
.putih {
 color: #FFF;
}
</style>
</head>
<body>


<?php 
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$diskon_barang = $_POST['diskon_barang'];


/*========= Fungsi Menghitung subtotal =========*/
$subtotal = $harga_barang * $jumlah_barang ;


/*========= Menghitung barang berdasarkan diskon ( atau bukan pelanggan). =========*/
// Keterangan:
// Jika barang diskon maka akan mendapat potongan harga sebanyak 10%.
// Jika barang tidak diskon maka tidak mendapat potongan harga. 
/////////////////////////////////////////////////////////////////////////////////////
switch ($diskon_barang){
 case "Ya": 
  $diskon = $subtotal * 0.1;
 break; 
 default: 
  $diskon = 0; 
 }


/*========= Fungsi Menghitung total keseluruhan =========*/
$total = $subtotal - $diskon;
?>


<div align="center">
<table width="297" border="0">
<tr>
<td colspan="2" bgcolor="#666666">
<div align="center" class="putih">
<strong>HASIL PERHITUNGAN</strong>
</div>
</td>
</tr>
<tr>
<td width="116" bgcolor="#CCCCCC">Nama Barang</td>
<td width="165" bgcolor="#CCCCCC">&nbsp;
<?php echo "$nama_barang"; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">Harga Barang</td>
<td bgcolor="#CCCCCC">&nbsp;
<?php echo "Rp. ".number_format($harga_barang); ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">Jumlah Barang</td>
<td bgcolor="#CCCCCC">&nbsp;
<?php echo "$jumlah_barang"; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">Subtotal</td>
<td bgcolor="#CCCCCC">&nbsp;
<?php echo "Rp. ".number_format($subtotal); ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">Diskon Barang</td>
<td bgcolor="#CCCCCC">&nbsp;
<?php echo "$diskon_barang"; ?></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">Jumlah Diskon</td>
<td bgcolor="#CCCCCC">&nbsp;
<?php echo "Rp. ".number_format($diskon); ?></td>
</tr>
<tr>
<td bgcolor="#666666" class="putih">
<strong>Total</strong></td>
<td bgcolor="#666666">&nbsp;
<?php echo "Rp. ".number_format($total); ?></td>
</tr>
</table>
<a href="index.php"> &lt;&lt; Kembali</a><br />
</div>
</body>
</html>