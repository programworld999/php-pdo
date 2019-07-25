<html>
<head>
<title> Insert </title>
</head>
<?php
//error_reporting(0);
try{
$db=new PDO("mysql:host=localhost;dbname=pdo","root","");
} catch(PDOException $e){
echo"Connection Is <strong style='color:red'>Failed ✖</br>".$e->getMessage();

}



if($db){
echo"connection Is <strong style='color:green'> Successful. ✔";

$sql="INSERT INTO con_t(id,name) VALUES('','SK. Sarfaraz')";
if($db->query($sql)){
echo"</br>Insert <strong style='color:green'> OK. ✔";

}else{
echo"</br>Insert <strong style='color:red'>Failed ✖";
}

}else{
//header('location: error.html');

}
$name='Albert';
$query=$db->query("INSERT INTO con_t(ID,name) VALUES('','$name')");
if(query){
echo"</br>Second Insert <strong style='color:green'> OK. ✔";

}
?>