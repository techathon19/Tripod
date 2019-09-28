<?php
$name = $_POST['name'];
$date = $_POST['date'];
$conn=mysqli_connect("localhost:3306","root","","veunedb");
if(!$conn)
    die("connection error".mysqli_connect_error());
else{
    
$sql=mysqli_query($conn,"insert into venue (Eventname, Eventdate) values ('$name','$date');");
if($sql)
    echo"Insertion successfull";
else
    echo"Insertion failure".mysqli_error($conn);
}
mysqli_close($conn);
?>