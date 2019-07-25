<?php
session_start();
include('con.php');

?>
<?php

$submit=$_SESSION['submit']=$usub=$_POST['usub'];
$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$_SESSION['UE']=$uemail;
$upass=$_POST['upass'];
$time=time();
if(isset($submit)){
if(empty($uname) && empty($uemail) && empty($upass)){
header("location: sing_up.php");
$_SESSION['emassg']="please fill the form successfully";

return false;

}else{
$sql="INSERT INTO `ragister`(`name`, `email`, `password`, `time`) VALUES (?,?,?,'$time')";
$Query=$db->prepare($sql);
$Query->execute([$uname,$uemail,$upass]);

}
if($Query){
//echo"Insert ok";
header("location: home.php");
}else{
echo"Insert filed";
return false;
}
}else{
//echo"Submit not set";
header("location: sing_up.php");
return false;
}



?>


