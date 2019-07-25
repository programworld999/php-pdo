<?php
//error_reporting(0);
include 'con.php';

try{
$Query=$db->prepare("INSERT INTO con_t(name) VALUES(?)");
$Query->execute(['Jhone']);
} catch(PDOException $e){
echo"insert Failed ✖</br>".$e->getMessage();
}



$name='Albert';
$query=$db->query("INSERT INTO con_t(id,name) VALUES('','$name')");
//$query->execute(array('','Jhon'));

if(query){
echo"</br>Second Insert <strong style='color:green'> OK. ✔";

}else{
echo"</br>Second Insert <strong style='color:red'> Not ok";

}
?>