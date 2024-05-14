<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <center>
        <form action="update.php" method="POST">
            <Input type="text" name="ass_id" placeholder="Enter Id" ></Input><br>
            <input type="text" name="ass_name" placeholder="Enter association"><br>
            <input type="submit" name="update" value="Update Data"><br>
        </form>
    </center>
    
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","@Stephen12#xampp","fms");
if(isset($_POST['UPDATE']))
{
    $id=$_POST['ass_id'];
    $query="UPDATE 'association' SET ass_id='$_POST[ass_id]',update='$_update' where id='$_POST[id]'";
   $query_run=mysqli_query($conn,$query);  
   if($query_run)
   {
    echo '<script type="text/javascript">alert ("data updated")</script>';

   }
   else{
    echo '<script type="text/javascript">alert ("not data updated")</script>';
   }
}


?>