<?php
include('con.php');
$sql="DELETE FROM con_t WHERE id=?";
$Query=$db->prepare($sql);
for($i=0;$i<50;$i++){
$Query->execute([$i]);
}
if($Query){
echo"<strong style='color:green'>Delete Successful✔</strong>";
}


?>