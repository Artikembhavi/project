<?php
$con=mysqli_connect("localhost","root","","project");
$x=$_GET['z'];
$sql="delete from coursedetail where id=$x";
if(mysqli_query($con,$sql))
{
    echo '<script>alert("Record Deleted")
    window.location.href="coursedetailtable.php"
    </script>';
}
else
{
    echo "error".mysqli_error($con);
}
?>