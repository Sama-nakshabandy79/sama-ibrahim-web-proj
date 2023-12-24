<?php
$fistname=$ REQUEST['first_name'];
$secondname=$ REQUEST['last_name'];
$address=$ REQUEST['address'];




if(isset($post['submit']))
{
    $host="localhost";
    $user = "root";
    $password = "";
    $dbname = "sama";

 
    @$conn = mysqli-connect( $host,$user,   $password , $dbname );

$insert="insert into bags values('$fistname','$secondname','$address')"



mysqli-query($conn,$insert);


if($conn){
    echo "Data inserted successfully";
}
else{
    echo "Data insertion failed";
    }
}








?>