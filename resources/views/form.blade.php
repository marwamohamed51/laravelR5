<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('formResult')}}" method="post">
    @csrf
  <label for="fname">name:</label><br>
  <input type="text" id="fname" name="clientName" value=""><br>
  <label for="lname">phone:</label><br>
  <input type="text" id="lname" name="phone" value=""><br>
  <label for="lname">email:</label><br>
  <input type="text" id="lname" name="email" value=""><br>
  <label for="lname">website:</label><br>
  <input type="text" id="lname" name="website" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

