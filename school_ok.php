<?
$sno=$_GET['sno'];
$sname=$_GET['sname'];
$kor=$_GET['kor'];
$eng=$_GET['eng'];
$math=$_GET['math'];
$hist=$_GET['hist'];
?>

<?
$con = mysqli_connect("localhost","root","world63","majustory");

$query="insert into examtbl (sNo, sName, kor, eng, math, hist) ";
$query= $query. " values ('$sno','$sname',$kor,$eng,$math,$hist)";

mysqli_query($con,$query);
mysqli_close($con);

header("Location:list.php");
exit;
?>
