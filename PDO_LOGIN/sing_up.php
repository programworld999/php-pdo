<?php
session_start();
?>

<html>
<head>
<link rel="stylesheet" href="http://localhost:8080//Login%20V2.0/Awesome%20Login%20v1.0/bootstrap.css">

<link rel="stylesheet" href="style.css">

<head>
<body>


</br>
</br>
<div class="container">
</br>
<h3 class="text text-center text- warning" id="errort"><?php echo $_SESSION['emassg'];
session_unset($_SESSION['emassg']);
?></h3>
</br>
</br>
</br>
<form action="sign_server.php" method="post">
<h3 class="text" id="nt">Name</h3>
<input type="text" class="container form-control col-sm-8" id="i1" name="uname">

</br>
</br>

<h3 class="text" id="et">Email</h3>
<input type="text" class="container form-control col-sm-8" id="i2" name="uemail">
</br>
</br>

<h3 class="text" id="pt">Password</h3>
<input type="password" class="container form-control col-sm-7" id="i3" name="upass">
</br>
</br>
<input type="submit" class="btn btn-primary text-center " value="Submit" name="usub" id="submit">


</form>
</div>
</body>
</html>


