<?php

$server = "localhost";    
$user = "root";                        
$pass = ""; 
$databse="luxureemdb";             

$connection=mysqli_connect($server,$user,$pass,$databse);

if($connection){
	
}else{
	echo "Not Connected";
}


?>