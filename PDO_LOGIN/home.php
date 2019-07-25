<?php
include('con.php');
//include('sign_server.php');
?>
<?php
/*--------[Sessions]-----------*/
$email=$_SESSION['UE'];

$submit=$_SESSION['submit'];
if(isset($submit)){
$sql="SELECT * FROM ragister WHERE email='$email'";
$Query=$db->prepare($sql);
$Query->execute([$email]);

$res=$Query->fetchAll(PDO::FETCH_OBJ);
foreach($res as $rows){

echo $rows->name;
}






}else{
header("location: sing_up.php");
}


?>

