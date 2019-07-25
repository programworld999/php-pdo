<html>
<head>
<title> Select </title> 
</head>
<?php
include 'con.php';
$sql="SELECT * FROM con_t WHERE id=?";
$query=$db->prepare($sql);
$query->execute([2]);
if($query){//<-we are use here if to check $query;
echo"</br>Numbers Of Row In Table: ". $query->rowCount();
//In this way we can check our get number of Rows in table;

 $row=$query->fetchAll(PDO::FETCH_OBJ);
?>
<ul>
<?php
foreach($row as $names){
echo "</br><li>".$names->name."</li>";
/*By using this process you can fetch data from database . let me explain that full process of fetching data from database:->

1.> first we was created a sql variable ($sql).And stored our sql(SELECT * FROM con_t...) ;

2.> Then we was created a object of $db($query). One important thing here we was use prepare as a query for security purpose. It's will be make secure to your code when we will be fetch data;

3.> After this your $query variable will converted on object . And you must be use $query->execute() becuse you was used-> (prepare) for your security purposes means you code is now not like a simple code .It was given you always secure system;

4.> Then we was used the if <- statement for check our code are  success or not {it's normal thing};

5.> After successful $query then you know that we was use rowCount function for check or know the numbers of row;

6.> After all we was created a variable($row) . And store there our mysqli fetch query means= $query->fetchAll(PDO::FETCH_OBJ).
I hope you can understand that you are using here public static method after seeing this (::) symbol. So here main thing is that we must be use fetchAll . it's a function for fetch all data from database . it's like rowCount. And I hope you had understand that it is use as (mysi_fetch_array). it's a good thing .

7.> And At last we was use the foreach loop like simple php's while. loop. And here we are transfer values from $row to $names; And you should know that $names now is a array and there have our all rows of our database table like a real-example

           (a)       (b)
            ⬇        ⬇
          $names -> name;
          
So it's simple that a $names is an array and name is a number or name of a value of this array;
and if a give here = on (b) as name then we will be got a list of id's from database;

*/
}

?>
</ul>
<?php

}



?>
