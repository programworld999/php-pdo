<html>
<head>
<title> Filter(Select) </title>
</head>
<?php
include 'con.php';
$sql="SELECT * FROM con_t WHERE id=?";
$Query=$db->prepare($sql);
$Query->execute([2]);
if($Query){//<-we are use here if to check $Query;
echo"</br>Numbers Of Row In Table: ". $Query->rowCount();
//In this way we can check our get number of Rows in table;

 $row=$Query->fetchAll(PDO::FETCH_OBJ);
//Here you can use only fetch ;
?>
<ul>
<?php
foreach($row as $names){
echo "</br><li>".$names->name."</li>";

}

?>
</ul>
<?php

}



?>
