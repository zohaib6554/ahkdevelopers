<?php
 $connection = mysql_connect('loclhost','root');

if ($connection) {
     echo "connection is Establish!";
}
else{
     echo "ERROR connection FAILED! ";
}

mysqli_select_db($connection,'test');
 
 $name = $_post['name'];
  $email = $_post['email'];
   $number = $_post['number'];

   $data = "INSERT INTO credentails (name, email, number) VALUES ('$name', '$email',$number,) ";

   mysqli_query($connection, $data);
   header(  string)

 ?>