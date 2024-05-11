<?php 
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $clientName = $_POST['clientName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];
}
?>
<!DOCTYPE html>
<html>
<body>



<h4>cleint name : {{$clientName}}</h4>
<h4>phone :{{$phone}}</h4>
<h4>Email : {{$email}}</h4>
<h4>Website :{{$website}}</h4>


</body>
</html>

