<?php 
session_start();
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Description = $_POST['Description'];
$proposeddate = $_POST['proposeddate'];
$requestDate = date("Y/m/d");
$timetutorial = $_POST['timetutorial'];
$studentlevel = $_POST['studentlevel'];
$expectedstudents = $_POST['expectedstudents'];

$resourcetype = $_POST['resourcetype'];
$numberrequired = $_POST['numberrequired'];

$schoolID=$_SESSION['schoolID'];

$sql=mysqli_query($koneksi,"insert into request values('','$requestDate','New','$Description','$schoolID')");
$sqla=mysqli_query($koneksi,"SELECT 'requestID' FROM request");
$idrequest = mysqli_num_rows($sqla);
echo $idrequest;
$sql2=mysqli_query($koneksi,"insert into tutorialrequest values('$proposeddate','$timetutorial','$studentlevel','$expectedstudents','$idrequest')");
$sql3=mysqli_query($koneksi,"insert into resourcerequest values('$resourcetype','$numberrequired','$idrequest')");
if ($sql) {
		header("location:index.php");
}else{
echo "<script>alert('Gagal');
	location.href='#'</script>";
}
 
?>