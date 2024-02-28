<?php
$servername='localhost';
$username="root";
$password="";
try
{
    $con=new PDO("mysql:host=$servername;dbname=online_shopping_cloths",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
?>