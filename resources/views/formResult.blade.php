<?php 
if ($_SERVER['REQUEST_METHOD'] === "POST") {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
}
?>
<!DOCTYPE html>
<html>
<body>

<h4>First name is : <?php echo $fname?></h4>
<br>
<h4>Last name is : <?php echo $lname?></h4>


</body>
</html>

