<?php 
session_start();
// koneksi database
include 'koneksi.php';
 
// get data
$offerID = $_GET['offerID'];

$sql=mysqli_query($koneksi,"UPDATE offer SET `offerstatus`='ACCEPTED' where offerID=$offerID");

$data = mysqli_query($koneksi,"SELECT * FROM offer WHERE offerID=$offerID");
$query=mysqli_fetch_array($data);
$requestID = $query['requestID'];

$sql2=mysqli_query($koneksi,"UPDATE request SET `requestStatus`='CLOSED' where requestID=$requestID");

if ($sql) {
		header("location:index.php");
}else{
echo "<script>alert('Gagal');
	location.href='#'</script>";
}
 
?>