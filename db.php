<?php
        require 'connection.php';
        createUser();  
function createUser()
{
    global $connect;
    $id=$_GET["id"];
    $name=$_GET["name"];
    $type=$_GET["type"];
    $query = "Insert into mytable(id,name,type) values('$id','$name','$type');";
   $result= mysqli_query($connect,$query);
if($result>0)
{
         echo "Data Saved";
         echo  "<html><body><br><a href='index.php'>GO Back</a>";
}
    mysqli_close($connect);
}
?>