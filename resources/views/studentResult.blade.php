<?php 
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $studentName = $_POST['studentName'];
    $age = $_POST['age'];
}
?>
<!DOCTYPE html>
<html>
<body>

<h4>Student name : {{$studentName}}</h4>
<h4>Age : {{$age}}</h4>

</body>
</html>

