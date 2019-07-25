<?php
session_start();
try{
$db=new PDO("mysql:host=localhost;dbname=pdo","root","");

}catch(PDOExeption $e){
echo"Connect not ok".$e->getMessage();
}


?>