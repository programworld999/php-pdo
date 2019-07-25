<?php
//error_reporting(0);
try{
$db=new PDO("mysql:host=localhost;dbname=pdo","root","");
} catch(PDOException $e){
echo"Connection Is <strong style='color:red'>Failed ✖</br>".$e->getMessage();

}



if($db){
echo"connection Is <strong style='color:green'> Successful. ✔";



}else{

//echo"Connection Is <strong style='color:red'>Failed ✖";
}
?>